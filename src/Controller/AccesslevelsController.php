<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Accesslevels Controller
 *
 * @property \App\Model\Table\AccesslevelsTable $Accesslevels
 *
 * @method \App\Model\Entity\Accesslevel[] paginate($object = null, array $settings = [])
 */
class AccesslevelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $accesslevels = $this->paginate($this->Accesslevels);

        $this->set(compact('accesslevels'));
        $this->set('_serialize', ['accesslevels']);
    }

    /**
     * View method
     *
     * @param string|null $id Accesslevel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accesslevel = $this->Accesslevels->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('accesslevel', $accesslevel);
        $this->set('_serialize', ['accesslevel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accesslevel = $this->Accesslevels->newEntity();
        if ($this->request->is('post')) {
            $accesslevel = $this->Accesslevels->patchEntity($accesslevel, $this->request->getData());
            if ($this->Accesslevels->save($accesslevel)) {
                $this->Flash->success(__('The accesslevel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accesslevel could not be saved. Please, try again.'));
        }
        $this->set(compact('accesslevel'));
        $this->set('_serialize', ['accesslevel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Accesslevel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accesslevel = $this->Accesslevels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accesslevel = $this->Accesslevels->patchEntity($accesslevel, $this->request->getData());
            if ($this->Accesslevels->save($accesslevel)) {
                $this->Flash->success(__('The accesslevel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accesslevel could not be saved. Please, try again.'));
        }
        $this->set(compact('accesslevel'));
        $this->set('_serialize', ['accesslevel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Accesslevel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accesslevel = $this->Accesslevels->get($id);
        if ($this->Accesslevels->delete($accesslevel)) {
            $this->Flash->success(__('The accesslevel has been deleted.'));
        } else {
            $this->Flash->error(__('The accesslevel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
