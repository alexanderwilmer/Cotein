<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

/**
 * Productos Controller
 *
 * @property \App\Model\Table\ProductosTable $Productos
 *
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

     public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Upload');
    }
    public function GetLists($query)
    {
      $conn = ConnectionManager::get('default');
      $result = $conn->execute("")->fetchAll('assoc');
      return $result;
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Marcas', 'Tipos'],
        ];
        $productos = $this->paginate($this->Productos);

        $this->set(compact('productos'));
    }

    public function producto()
    {


        $this->viewBuilder()->layout('publico');
       
        $this->paginate = [
            'contain' => ['Marcas', 'Tipos'],
        ];
        $productos = $this->paginate($this->Productos);

        $this->set(compact('productos'));
    }

    /**
     * View method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('ProductoAreas');

        $producto = $this->Productos->get($id, [
            'contain' => ['Marcas', 'Tipos', 'ProductoAreas', 'ProductoImagenes'],
        ]);
        $this->loadModel('ProductoAreas');

        $areas = $this->ProductoAreas->find('all', [
            'conditions' => ['producto_id' => $id ],
            'contain' => ['Areas' ],
        ]);

        $this->set('producto', $producto);
        $this->set('areas', $areas);

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $this->loadModel('Areas');
        $this->loadModel('Productos');
        $this->loadModel('ProductoAreas');

        $producto = $this->Productos->newEntity();
        if ($this->request->is('post')) {

            
            $data = $this->request->data;
            $time = time();
            $file= $this->request->data;
            $filename=$time.'-'.$file['imagen']['name'];
            $file['imagen']['name'] = $filename;
            $data['path']=$filename;

            $result= $this->Upload->send($file['imagen'],"productos",$filename);
            
            $producto = $this->Productos->patchEntity($producto, $data);
            $produc=$this->Productos->save($producto);
            if ($produc) {
                $areas = $this->request->data['areas'];
                
                if ($areas){

                    foreach ($areas as $item) {
                        $this->_area = TableRegistry::get('ProductoAreas');
                        $entity = $this->ProductoAreas->newEntity();
                        $area["area_id"]= $item ;
                        $area["producto_id"]=  $produc->id;
                        $add =   $this->ProductoAreas->patchEntity($entity, $area);
                        $post =  $this->ProductoAreas->save($add);   
                    }    

                }

                $this->Flash->success(__('Producto guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No pudo guardar la imagen.'));
        }
        



        $marcas = $this->Productos->Marcas->find('list', ['limit' => 200]);
        $areas = $this->Areas->find('list', ['limit' => 200]);
       
        $tipos = $this->Productos->Tipos->find('list', ['limit' => 200]);
        $this->set(compact('producto', 'marcas', 'tipos','areas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $this->loadModel('Areas');
        $this->loadModel('Productos');
        $this->loadModel('ProductoAreas');
        $producto = $this->Productos->get($id, [
            'contain' => ['ProductoAreas'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            
            $data = $this->request->data;
            try {

                $result=true;
                if(empty($data["imagen"]["name"])){
                       unset($data["path"]);
                }else{
                    $time = time();
                    $file= $this->request->data;
                    $filename=$time.'-'.$file['imagen']['name'];
                    $file['imagen']['name'] = $filename;
                    $data['path']=$filename;
                    $result= $this->Upload->send($file['imagen'],"productos",$filename);
                } 
            } catch (Exception $e) {
                
            }


            $producto = $this->Productos->patchEntity($producto, $data);
            if ($this->Productos->save($producto)) {
                $this->_area = TableRegistry::get('ProductoAreas');

                $areas = $this->request->data['areas'];
                

                $this->ProductoAreas->deleteAll(['producto_id'=>$id]);
                if ($areas){
                    foreach ($areas as $item) {
                        $entity = $this->ProductoAreas->newEntity();
                        $area["area_id"]= $item ;
                        $area["producto_id"]=  $id;
                        $add =   $this->ProductoAreas->patchEntity($entity, $area);
                        $post =  $this->ProductoAreas->save($add);   
                    }    
                }




                $this->Flash->success(__('The producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto could not be saved. Please, try again.'));
        }
         $this->loadModel('ProductoAreas');
         $this->loadModel('Areas');

      
         $area_seleccionada = $this->ProductoAreas
        ->find( )
        ->select('area_id')
        ->enableHydration(false)
        ->where(['producto_id' => $id ])->toArray();
         $pila = array();
        foreach ($area_seleccionada  as $value) {
             array_push($pila, $value['area_id'] );
        }
       

        print_r($pila);
        $area_seleccionada= $pila;
        $areas = $this->Areas->find('list', ['limit' => 200]);

        $marcas = $this->Productos->Marcas->find('list', ['limit' => 200]);
        $tipos = $this->Productos->Tipos->find('list', ['limit' => 200]);
        $this->set(compact('producto', 'marcas', 'tipos','areas','area_seleccionada'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Productos->get($id);
        if ($this->Productos->delete($producto)) {
            $this->Flash->success(__('The producto has been deleted.'));
        } else {
            $this->Flash->error(__('The producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    
}
