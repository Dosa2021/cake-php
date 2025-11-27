<?php

namespace App\Controller;

class CommentsController extends AppController
{
  public function add()
  {
    $comment = $this->Comments->newEntity();

    if ($this->request->is('post')) {
      $comment = $this->Comments->patchEntity($comment, $this->request->data);

      if ($this->Comments->save($comment)) {
        $this->Flash->success('Comment Add successful');
        return $this->redirect([
          'controller'=>'Posts',
          'action'=>'index',
          $comment->post_id
        ]);
      } else {
        $this->Flash->error('Comment Add error');
      }
    }
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $comment = $this->Comments->get($id);

    if ($this->Comments->delete($comment)) {
      $this->Flash->success('Comment delete successful');
    } else {
      $this->Flash->error('delete error');
    }

    return $this->redirect([
      'controller'=>'Posts',
      'action'=>'view',
      $comment->post_id
    ]);
  }
}