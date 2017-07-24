<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tarifs Controller
 *
 * @property \App\Model\Table\TarifsTable $Tarifs
 *
 * @method \App\Model\Entity\Tarif[] paginate($object = null, array $settings = [])
 */
class TarifsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tarifs = $this->paginate($this->Tarifs);

        $this->set(compact('tarifs'));
        $this->set('_serialize', ['tarifs']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tarif = $this->Tarifs->newEntity();
        if ($this->request->is('post')) {
            $tarif = $this->Tarifs->patchEntity($tarif, $this->request->getData());
            if ($this->Tarifs->save($tarif)) {
                $this->Flash->success(__('The tarif has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tarif could not be saved. Please, try again.'));
        }
        $this->set(compact('tarif'));
        $this->set('_serialize', ['tarif']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tarif id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tarif = $this->Tarifs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tarif = $this->Tarifs->patchEntity($tarif, $this->request->getData());
            if ($this->Tarifs->save($tarif)) {
                $this->Flash->success(__('The tarif has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tarif could not be saved. Please, try again.'));
        }
        $this->set(compact('tarif'));
        $this->set('_serialize', ['tarif']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tarif id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete', 'get']);
        $tarif = $this->Tarifs->get($id);
        if ($this->Tarifs->delete($tarif)) {
            $this->Flash->success(__('The tarif has been deleted.'));
        } else {
            $this->Flash->error(__('The tarif could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
