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
        $this->loadModel('Marcas');
        $funciones=$this->Funciones->find();
        $habilidades=$this->Habilidades->find();
        $this->loadModel('Empresas');

        $empresas=$this->Empresas->find()->first();
        $marcas=$this->Marcas->find();


        $this->set(compact('funciones', 'habilidades', 'empresas','marcas'));

         
    }
	public function detalle($id = null)
    {
         $this->viewBuilder()->layout('publico');
        $this->loadModel('ProductoAreas');
        $this->loadModel('Productos');
        

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
    
}
