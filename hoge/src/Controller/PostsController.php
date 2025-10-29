<?php

namespace App\Controller;

class PostsController extends AppController
{
  public function index()
  {
    // $posts = $this->Posts->find('all')
    //   ->order(['title' => 'desc'])
    //   ->limit(2)
    //   ->where(['title like' => '%3']);
    $posts = $this->Posts->find('all');
    $this->set('posts', $posts);
  }

  public function view($id = null)
  {
    $posts = $this->Posts->get($id);
    $this->set('post', $posts);
  }

  public function add()
  {
    $post = $this->Posts->newEntity();

    if ($this->request->is('post')) {
      $post = $this->Posts->patchEntity($post, $this->request->data);
      if ($this->Posts->save($post)) {
        $this->Flash->success('Add successful');
        return $this->redirect(['action'=>'index']);
      } else {
        $this->Flash->error('Add error');
      }
    }
  }

  public function edit($id = null)
  {
    $post = $this->Posts->get($id);
    // Note: viewに渡すにはこれが必要？
    $this->set('post', $post);

    if ($this->request->is(['post', 'patch', 'put'])) {
      $post = $this->Posts->patchEntity($post, $this->request->data);
      if ($this->Posts->save($post)) {
        $this->Flash->success('Edit successful');
        return $this->redirect(['action'=>'index']);
      } else {
        $this->Flash->error('Edit error');
      }
    }
  }
}