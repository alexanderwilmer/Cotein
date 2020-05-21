<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductoImagenes Controller
 *
 * @property \App\Model\Table\ProductoImagenesTable $ProductoImagenes
 *
 * @method \App\Model\Entity\ProductoImagene[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductoImagenesController extends AppController
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
        $this->paginate = [
            'contain' => ['Productos'],
        ];
        $productoImagenes = $this->paginate($this->ProductoImagenes);

        $this->set(compact('productoImagenes'));
    }

    /**
     * View method
     *
     * @param string|null $id Producto Imagene id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productoImagene = $this->ProductoImagenes->get($id, [
            'contain' => ['Productos'],
        ]);

        $this->set('productoImagene', $productoImagene);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($producto)
    {
        $productoImagene = $this->ProductoImagenes->newEntity();
        if ($this->request->is('post')) {
            
            $data = $this->request->data;
            $time = time();
            $file= $this->request->data;
            $filename=$time.'-'.$file['imagen']['name'];
            $file['imagen']['name'] = $filename;
            $data['path']=$filename;
            $data['name']=$filename;
            $data['producto_id']=$producto;
            $result= $this->Upload->send($file['imagen'],"productos",$filename);
            $productoImagene = $this->ProductoImagenes->patchEntity($productoImagene, $data);
            

            if ($this->ProductoImagenes->save($productoImagene)) {
                $this->Flash->success(__('The producto imagene has been saved.'));
              return  $this->redirect(array('controller' => 'productos', 'action' => 'view', $producto));
            }
            $this->Flash->error(__('The producto imagene could not be saved. Please, try again.'));
        }
        $productos = $this->ProductoImagenes->Productos->find('list', ['limit' => 200]);
        $this->set(compact('productoImagene', 'productos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto Imagene id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productoImagene = $this->ProductoImagenes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productoImagene = $this->ProductoImagenes->patchEntity($productoImagene, $this->request->getData());
            if ($this->ProductoImagenes->save($productoImagene)) {
                $this->Flash->success(__('The producto imagene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto imagene could not be saved. Please, try again.'));
        }
        $productos = $this->ProductoImagenes->Productos->find('list', ['limit' => 200]);
        $this->set(compact('productoImagene', 'productos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto Imagene id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productoImagene = $this->ProductoImagenes->get($id);
        if ($this->ProductoImagenes->delete($productoImagene)) {
            $this->Flash->success(__('The producto imagene has been deleted.'));
        } else {
            $this->Flash->error(__('The producto imagene could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
