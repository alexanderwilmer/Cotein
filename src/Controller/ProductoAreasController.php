<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductoAreas Controller
 *
 * @property \App\Model\Table\ProductoAreasTable $ProductoAreas
 *
 * @method \App\Model\Entity\ProductoArea[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductoAreasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Areas', 'Productos'],
        ];
        $productoAreas = $this->paginate($this->ProductoAreas);

        $this->set(compact('productoAreas'));
    }

    /**
     * View method
     *
     * @param string|null $id Producto Area id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productoArea = $this->ProductoAreas->get($id, [
            'contain' => ['Areas', 'Productos'],
        ]);

        $this->set('productoArea', $productoArea);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productoArea = $this->ProductoAreas->newEntity();
        if ($this->request->is('post')) {
            $productoArea = $this->ProductoAreas->patchEntity($productoArea, $this->request->getData());
            if ($this->ProductoAreas->save($productoArea)) {
                $this->Flash->success(__('The producto area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto area could not be saved. Please, try again.'));
        }
        $areas = $this->ProductoAreas->Areas->find('list', ['limit' => 200]);
        $productos = $this->ProductoAreas->Productos->find('list', ['limit' => 200]);
        $this->set(compact('productoArea', 'areas', 'productos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto Area id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productoArea = $this->ProductoAreas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productoArea = $this->ProductoAreas->patchEntity($productoArea, $this->request->getData());
            if ($this->ProductoAreas->save($productoArea)) {
                $this->Flash->success(__('The producto area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto area could not be saved. Please, try again.'));
        }
        $areas = $this->ProductoAreas->Areas->find('list', ['limit' => 200]);
        $productos = $this->ProductoAreas->Productos->find('list', ['limit' => 200]);
        $this->set(compact('productoArea', 'areas', 'productos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto Area id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productoArea = $this->ProductoAreas->get($id);
        if ($this->ProductoAreas->delete($productoArea)) {
            $this->Flash->success(__('The producto area has been deleted.'));
        } else {
            $this->Flash->error(__('The producto area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
