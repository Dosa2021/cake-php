<?php

namespace App\Controller;

class PostsController extends AppController
{
  public function index()
  {
    $posts = $this->Posts->find('all')
      ->order(['title' => 'desc'])
      ->limit(2)
      ->where(['title like' => '%3']);
    $this->set('posts', $posts);
  }
}