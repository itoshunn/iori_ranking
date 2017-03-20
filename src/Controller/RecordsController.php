<?php
namespace App\Controller;

use App\Controller\AppController;


class RecordsController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Games']
        ];
        $records = $this->paginate($this->Records);

        $this->set(compact('records'));
        $this->set('_serialize', ['records']);
    }

    public function view($id = null)
    {
        $record = $this->Records->get($id, [
            'contain' => ['Users', 'Games']
        ]);

        $this->set('record', $record);
        $this->set('_serialize', ['record']);
    }


    public function add()
    {
        $record = $this->Records->newEntity();
        if ($this->request->is('post')) {
            $record = $this->Records->patchEntity($record, $this->request->data);
            if ($this->Records->save($record)) {
                $this->Flash->success(__('The record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be saved. Please, try again.'));
        }
        $users = $this->Records->Users->find('list', ['limit' => 200]);
        $games = $this->Records->Games->find('list', ['limit' => 200]);
        $this->set(compact('record', 'users', 'games'));
        $this->set('_serialize', ['record']);
    }


    public function edit($id = null)
    {
        $record = $this->Records->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $record = $this->Records->patchEntity($record, $this->request->data);
            if ($this->Records->save($record)) {
                $this->Flash->success(__('The record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be saved. Please, try again.'));
        }
        $users = $this->Records->Users->find('list', ['limit' => 200]);
        $games = $this->Records->Games->find('list', ['limit' => 200]);
        $this->set(compact('record', 'users', 'games'));
        $this->set('_serialize', ['record']);
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $record = $this->Records->get($id);
        if ($this->Records->delete($record)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
