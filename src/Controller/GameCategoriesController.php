<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GameCategories Controller
 *
 * @property \App\Model\Table\GameCategoriesTable $GameCategories
 */
class GameCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $gameCategories = $this->paginate($this->GameCategories);

        $this->set(compact('gameCategories'));
        $this->set('_serialize', ['gameCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Game Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gameCategory = $this->GameCategories->get($id, [
            'contain' => []
        ]);

        $this->set('gameCategory', $gameCategory);
        $this->set('_serialize', ['gameCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gameCategory = $this->GameCategories->newEntity();
        if ($this->request->is('post')) {
            $gameCategory = $this->GameCategories->patchEntity($gameCategory, $this->request->data);
            if ($this->GameCategories->save($gameCategory)) {
                $this->Flash->success(__('The game category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The game category could not be saved. Please, try again.'));
        }
        $this->set(compact('gameCategory'));
        $this->set('_serialize', ['gameCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Game Category id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gameCategory = $this->GameCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gameCategory = $this->GameCategories->patchEntity($gameCategory, $this->request->data);
            if ($this->GameCategories->save($gameCategory)) {
                $this->Flash->success(__('The game category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The game category could not be saved. Please, try again.'));
        }
        $this->set(compact('gameCategory'));
        $this->set('_serialize', ['gameCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Game Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gameCategory = $this->GameCategories->get($id);
        if ($this->GameCategories->delete($gameCategory)) {
            $this->Flash->success(__('The game category has been deleted.'));
        } else {
            $this->Flash->error(__('The game category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
