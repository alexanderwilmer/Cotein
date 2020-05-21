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

         
    }

    
}
