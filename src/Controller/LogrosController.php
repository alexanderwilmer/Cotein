<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Logros Controller
 *
 * @property \App\Model\Table\LogrosTable $Logros
 *
 * @method \App\Model\Entity\Logro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LogrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $logros = $this->paginate($this->Logros);

        $this->set(compact('logros'));
    }

    /**
     * View method
     *
     * @param string|null $id Logro id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logro = $this->Logros->get($id, [
            'contain' => [],
        ]);

        $this->set('logro', $logro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logro = $this->Logros->newEntity();
        if ($this->request->is('post')) {
            $logro = $this->Logros->patchEntity($logro, $this->request->getData());
            if ($this->Logros->save($logro)) {
                $this->Flash->success(__('The logro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logro could not be saved. Please, try again.'));
        }
        $this->set(compact('logro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Logro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logro = $this->Logros->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logro = $this->Logros->patchEntity($logro, $this->request->getData());
            if ($this->Logros->save($logro)) {
                $this->Flash->success(__('The logro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logro could not be saved. Please, try again.'));
        }
        $this->set(compact('logro'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Logro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logro = $this->Logros->get($id);
        if ($this->Logros->delete($logro)) {
            $this->Flash->success(__('The logro has been deleted.'));
        } else {
            $this->Flash->error(__('The logro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
