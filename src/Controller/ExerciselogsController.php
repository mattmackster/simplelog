<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Exerciselogs Controller
 *
 * @property \App\Model\Table\ExerciselogsTable $Exerciselogs
 *
 * @method \App\Model\Entity\Exerciselog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExerciselogsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $exerciselogs = $this->paginate($this->Exerciselogs);

        $this->set(compact('exerciselogs'));
    }

    /**
     * View method
     *
     * @param string|null $id Exerciselog id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $exerciselog = $this->Exerciselogs->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('exerciselog', $exerciselog);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $exerciselog = $this->Exerciselogs->newEntity();
        if ($this->request->is('post')) {
            $exerciselog = $this->Exerciselogs->patchEntity($exerciselog, $this->request->getData());
            if ($this->Exerciselogs->save($exerciselog)) {
                $this->Flash->success(__('The exerciselog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exerciselog could not be saved. Please, try again.'));
        }
        $users = $this->Exerciselogs->Users->find('list', ['limit' => 200]);
        $this->set(compact('exerciselog', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Exerciselog id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $exerciselog = $this->Exerciselogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $exerciselog = $this->Exerciselogs->patchEntity($exerciselog, $this->request->getData());
            if ($this->Exerciselogs->save($exerciselog)) {
                $this->Flash->success(__('The exerciselog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exerciselog could not be saved. Please, try again.'));
        }
        $users = $this->Exerciselogs->Users->find('list', ['limit' => 200]);
        $this->set(compact('exerciselog', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Exerciselog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $exerciselog = $this->Exerciselogs->get($id);
        if ($this->Exerciselogs->delete($exerciselog)) {
            $this->Flash->success(__('The exerciselog has been deleted.'));
        } else {
            $this->Flash->error(__('The exerciselog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
