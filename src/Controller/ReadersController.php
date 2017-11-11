<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Readers Controller
 *
 * @property \App\Model\Table\ReadersTable $Readers
 *
 * @method \App\Model\Entity\Reader[] paginate($object = null, array $settings = [])
 */
class ReadersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Locations']
        ];
        $readers = $this->paginate($this->Readers);

        $this->set(compact('readers'));
        $this->set('_serialize', ['readers']);
    }

    /**
     * View method
     *
     * @param string|null $id Reader id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reader = $this->Readers->get($id, [
            'contain' => ['Locations']
        ]);

        $this->set('reader', $reader);
        $this->set('_serialize', ['reader']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reader = $this->Readers->newEntity();
        if ($this->request->is('post')) {
            $reader = $this->Readers->patchEntity($reader, $this->request->getData());
            if ($this->Readers->save($reader)) {
                $this->Flash->success(__('The reader has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reader could not be saved. Please, try again.'));
        }
        $locations = $this->Readers->Locations->find('list', ['limit' => 200]);
        $this->set(compact('reader', 'locations'));
        $this->set('_serialize', ['reader']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Reader id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reader = $this->Readers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reader = $this->Readers->patchEntity($reader, $this->request->getData());
            if ($this->Readers->save($reader)) {
                $this->Flash->success(__('The reader has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reader could not be saved. Please, try again.'));
        }
        $locations = $this->Readers->Locations->find('list', ['limit' => 200]);
        $this->set(compact('reader', 'locations'));
        $this->set('_serialize', ['reader']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Reader id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reader = $this->Readers->get($id);
        if ($this->Readers->delete($reader)) {
            $this->Flash->success(__('The reader has been deleted.'));
        } else {
            $this->Flash->error(__('The reader could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
