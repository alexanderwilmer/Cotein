<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Marcas Controller
 *
 * @property \App\Model\Table\MarcasTable $Marcas
 *
 * @method \App\Model\Entity\Marca[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MarcasController extends AppController
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
    public function index()
    {
        $marcas = $this->paginate($this->Marcas);

        $this->set(compact('marcas'));
    }

    /**
     * View method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $marca = $this->Marcas->get($id, [
            'contain' => ['Productos'],
        ]);

        $this->set('marca', $marca);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $marca = $this->Marcas->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $time = time();
            $file= $this->request->data;
            $filename=$time.'-'.$file['imagen']['name'];
            $file['imagen']['name'] = $filename;
            $data['path']=$filename;

            $result= $this->Upload->send($file['imagen'],"marcas",$filename);
            $marca = $this->Marcas->patchEntity($marca, $data );
            if ($this->Marcas->save($marca)) {
                $this->Flash->success(__('The marca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The marca could not be saved. Please, try again.'));
        }
        $this->set(compact('marca'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $marca = $this->Marcas->get($id, [
            'contain' => [],
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
                    $result= $this->Upload->send($file['imagen'],"marcas",$filename);
                } 
            } catch (Exception $e) {
                
            }


            $marca = $this->Marcas->patchEntity($marca,$data);
            if ($this->Marcas->save($marca)) {
                $this->Flash->success(__('The marca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The marca could not be saved. Please, try again.'));
        }
        $this->set(compact('marca'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marca = $this->Marcas->get($id);
        if ($this->Marcas->delete($marca)) {
            $this->Flash->success(__('The marca has been deleted.'));
        } else {
            $this->Flash->error(__('The marca could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
