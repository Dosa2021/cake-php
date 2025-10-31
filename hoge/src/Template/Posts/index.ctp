<?php
  $this->assign('title', 'All Users');
?>

<h1>Blog Posts</h1>
<ul>
  <?php foreach ($posts as $post) : ?>
    <li>
      <!-- <?=
        $this->Html->link(
          $post->title,
          ['class' => 'button', 'target' => '_blank']
        );
      ?> -->
      <a href="<?= $this->Url->build(['action' => 'view', $post->id]) ?>">
        <?= h($post->title) ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>