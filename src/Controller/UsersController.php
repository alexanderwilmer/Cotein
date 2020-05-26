<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\EnquiryForm;
use Cake\Event\Event;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

     
   
    private $_LisPermisos=1;

    public function initialize()
    {
        parent::initialize();
         $this->loadComponent('RequestHandler');
        $this->loadComponent('Upload');
      

    }
    public function index()
    {

         //Se invoca el metodo para validar si tiene permiso de entrar en esta acción, se define el id del modulo -1  y la acción a realizar
        $this->IsAutirizado($this->_LisPermisos[1]["view"]); 


        $this->paginate = [
            'contain' => ['Rols']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        //Se invoca el metodo para validar si tiene permiso de entrar en esta acción, se define el id del modulo -1  y la acción a realizar
        $this->IsAutirizado($this->_LisPermisos[1]["view"]); 
        $user = $this->Users->get($id, [
            'contain' => ['Rols', 'DaHistoricos']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }


    public function view2($id = null)
    {  


       $user = $this->Users->get($id, [
            'contain' => []
        ]);
     
        $this->viewBuilder()->options([
            'pdfConfig' => [
                'orientation' => 'portrait',
                'filename' => 'User_' . $id . '.pdf'
            ]
        ]);
        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

     //Se invoca el metodo para validar si tiene permiso de entrar en esta acción, se define el id del modulo -1  y la acción a realizar
        $this->IsAutirizado($this->_LisPermisos[1]["agregar"]); 



        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
           




            $data = $this->request->data;


            $time = time();
            $file= $this->request->data;
            $filename=$time.'-'.$file['foto']['name'];
            $file['foto']['name'] = $filename;
            $data['foto']=$filename;
                 
           $result= $this->Upload->send($file['foto'],"usuarios");
            $user = $this->Users->patchEntity($user, $data);
            if(!$result){
                   $this->Flash->error(__('Verifique que el archivo sea una imagen'));
            }else{

                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Se creo un nuevo usuario.'));
                    return $this->redirect(['action' => 'index']);
                } else {


                    if($user->errors()){
                    $error_msg = [];
                    foreach( $user->errors() as $errors){
                        if(is_array($errors)){
                            foreach($errors as $error){
                                $error_msg[]    =   $error;
                            }
                        }else{
                            $error_msg[]    =   $errors;
                        }
                    }

                    if(!empty($error_msg)){
                        $this->Flash->error(
                            ("Error en los datos : ".implode("\n \r", $error_msg))
                            );
                        }
                    }



               //   $this->Flash->error(__('No se pudo guarda el usuario, favor, intente de nuevo' ));
                }

            }   
        }
        $rols = $this->Users->Rols->find('list', ['limit' => 200]);
        $this->set(compact('user', 'rols'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
     //Se invoca el metodo para validar si tiene permiso de entrar en esta acción, se define el id del modulo -1  y la acción a realizar
        $this->IsAutirizado($this->_LisPermisos[1]["editar"]); 

        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $rols = $this->Users->Rols->find('list', ['limit' => 200]);
        $this->set(compact('user', 'rols'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {


        //Se invoca el metodo para validar si tiene permiso de entrar en esta acción, se define el id del modulo -1  y la acción a realizar
        $this->IsAutirizado($this->_LisPermisos[1]["eliminar"]); 

        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function login() {
        $this->viewBuilder()->layout('login');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Tu usuario o tu contraseña son incorrectos'));
        }
   }

    public function logout(){
         $this->Flash->success('You are logged out');
         return $this->redirect($this->Auth->logout());
    }


}
