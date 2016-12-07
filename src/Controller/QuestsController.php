<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Quests Controller
 *
 * @property \App\Model\Table\QuestsTable $Quests
 */
class QuestsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Temas']
        ];
        $quests = $this->paginate($this->Quests);

        $this->set(compact('quests'));
        $this->set('_serialize', ['quests']);
    }

    /**
     * View method
     *
     * @param string|null $id Quest id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quest = $this->Quests->get($id, [
            'contain' => ['Temas', 'Pontos']
        ]);

        $this->set('quest', $quest);
        $this->set('_serialize', ['quest']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quest = $this->Quests->newEntity();
        if ($this->request->is('post')) {
            $quest = $this->Quests->patchEntity($quest, $this->request->data);
            if ($this->Quests->save($quest)) {
                $this->Flash->success(__('The quest has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The quest could not be saved. Please, try again.'));
            }
        }
        $temas = $this->Quests->Temas->find('list', ['limit' => 200]);
        $this->set(compact('quest', 'temas'));
        $this->set('_serialize', ['quest']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Quest id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quest = $this->Quests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quest = $this->Quests->patchEntity($quest, $this->request->data);
            if ($this->Quests->save($quest)) {
                $this->Flash->success(__('The quest has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The quest could not be saved. Please, try again.'));
            }
        }
        $temas = $this->Quests->Temas->find('list', ['limit' => 200]);
        $this->set(compact('quest', 'temas'));
        $this->set('_serialize', ['quest']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Quest id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quest = $this->Quests->get($id);
        if ($this->Quests->delete($quest)) {
            $this->Flash->success(__('The quest has been deleted.'));
        } else {
            $this->Flash->error(__('The quest could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
