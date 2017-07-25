<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Utility\Toolbox;
use Cake\Event\Event;

/**
 * Files Controller
 *
 * @property \App\Model\Table\FilesTable $Files
 *
 * @method \App\Model\Entity\File[] paginate($object = null, array $settings = [])
 */
class FilesController extends AppController
{


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Donner acces à la page index si loguer
        if ($this->Auth->User('id')) {
          $this->Auth->allow(['index']);
        }
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tarifs']
        ];

        // Check si le user est admin (pour afficher les liens du menu dans la vue)
        // et generer le where de la requête
        $user = $this->Auth->user();
        if($user['role'] == 'Admin')
        {
          $this->set('is_admin', 1);
          $where = '';
        } else {
          $where = ['tarif_id' => $user['tarif_id']];
        }


        $query = $this->Files->find()->where($where);

        $files = $this->paginate($query);

        $this->set(compact('files'));
        $this->set('_serialize', ['files',]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $file = $this->Files->newEntity();
        if ($this->request->is('post')) {

            // Upload du fichier
            $fileUpload = Toolbox::uploadFile(['file' => $this->request->data['filename'], 'validExtension' => [ 'gif', 'jpg', 'jpeg']]);
            $this->request->data['filename'] = $fileUpload['filename'];  // Récupére le nom final du fichier
            $this->request->data['filedossier'] = $fileUpload['folder']; // Récupère le dossier de destiation

            $file = $this->Files->patchEntity($file, $this->request->getData());

            if ($this->Files->save($file)) {
                $this->Flash->success(__('The file has been saved.'));

                return $this->redirect('/files/index');
            }
            $this->Flash->error(__('The file could not be saved. Please, try again.'));
        }
        $tarifs = $this->Files->Tarifs->find('list', ['limit' => 200]);
        $this->set(compact('file', 'tarifs'));
        $this->set('_serialize', ['file']);
    }

    /**
     * Edit method
     *
     * @param string|null $id File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $file = $this->Files->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $file = $this->Files->patchEntity($file, $this->request->getData());
            if ($this->Files->save($file)) {
                $this->Flash->success(__('The file has been saved.'));

                return $this->redirect('/files/index');
            }
            $this->Flash->error(__('The file could not be saved. Please, try again.'));
        }
        $tarifs = $this->Files->Tarifs->find('list', ['limit' => 200]);
        $this->set(compact('file', 'tarifs'));
        $this->set('_serialize', ['file']);
    }

    /**
     * Delete method
     *
     * @param string|null $id File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete', 'get']);
        $file = $this->Files->get($id);
        debug ($file->filename);
        if ($this->Files->delete($file)) {
            unlink(WWW_ROOT . 'files/catalogues/'.$file->filedossier.'/'.$file->filename);//Supprimer le fichier
            rmdir(WWW_ROOT . 'files/catalogues/'.$file->filedossier.'/'); //Supprimer le dossier
            $this->Flash->success(__('The file has been deleted.'));
        } else {
            $this->Flash->error(__('The file could not be deleted. Please, try again.'));
        }

        return $this->redirect('/files/index');
    }
}
