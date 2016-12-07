<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Temas Controller
 *
 * @property \App\Model\Table\TemasTable $Temas
 */
class TemasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $temas = $this->paginate($this->Temas);

        $this->set(compact('temas'));
        $this->set('_serialize', ['temas']);
    }

    /**
     * View method
     *
     * @param string|null $id Tema id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tema = $this->Temas->get($id, [
            'contain' => ['Users', 'Pontos', 'Quests']
        ]);

        $this->set('tema', $tema);
        $this->set('_serialize', ['tema']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tema = $this->Temas->newEntity();
        if ($this->request->is('post')) {
            $tema = $this->Temas->patchEntity($tema, $this->request->data);
            if ($this->Temas->save($tema)) {
                $this->Flash->success(__('The tema has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tema could not be saved. Please, try again.'));
            }
        }
        $users = $this->Temas->Users->find('list', ['limit' => 200]);
        $this->set(compact('tema', 'users'));
        $this->set('_serialize', ['tema']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tema id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tema = $this->Temas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tema = $this->Temas->patchEntity($tema, $this->request->data);
            if ($this->Temas->save($tema)) {
                $this->Flash->success(__('The tema has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tema could not be saved. Please, try again.'));
            }
        }
        $users = $this->Temas->Users->find('list', ['limit' => 200]);
        $this->set(compact('tema', 'users'));
        $this->set('_serialize', ['tema']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tema id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tema = $this->Temas->get($id);
        if ($this->Temas->delete($tema)) {
            $this->Flash->success(__('The tema has been deleted.'));
        } else {
            $this->Flash->error(__('The tema could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
