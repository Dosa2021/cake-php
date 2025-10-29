<?php

namespace App\Controller;

class PostsController extends AppController
{
  public function index()
  {
    $this->viewBuilder()->layout('my-layout');
    // $posts = $this->Posts->find('all')
    //   ->order(['title' => 'desc'])
    //   ->limit(2)
    //   ->where(['title like' => '%3']);
    $posts = $this->Posts->find('all');
    $this->set('posts', $posts);
  }
}