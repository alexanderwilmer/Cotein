<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipos Controller
 *
 * @property \App\Model\Table\TiposTable $Tipos
 *
 * @method \App\Model\Entity\Tipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrincipalController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
         $this->viewBuilder()->layout('publico');
        $this->loadModel('Funciones');
        $this->loadModel('Habilidades');
        $this->loadModel('Empresas');
        $this->loadModel('Partners');
        $funciones=$this->Funciones->find('list', ['limit' => 200]);
        $habilidades=$this->Habilidades->find('list', ['limit' => 200]);
        $empresas=$this->Empresas->find('list', ['limit' => 200]);
        $partners=$this->Partners->find('list', ['limit' => 200]);


        $this->set(compact('funciones', 'habilidades', 'empresas','partners'));

         
    }

    
}
