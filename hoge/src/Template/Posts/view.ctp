<?php
  $this->assign('title', 'Blog Detail');
?>

<h1>
  <?= $this->Html->link('Back', ['action' => 'index'], ['class' => ['fs12', 'flr']]); ?>
  <?= h($post->title); ?>
</h1>
<p><?= nl2br(h($post->body)); ?></p>

<h2>Comments<span>(<?= count($post->comments); ?>)</span></h2>
<ul>
  <?php foreach ($post->comments as $comment) : ?>
    <li><?= h($comment->body) ?></li>
      <?=
        $this->Form->postlink(
          '[x]',
          ['controller' => 'Comments','action' => 'delete', $comment->id],
          ['confirm'=> 'ok?']
        )
      ?>
  <?php endforeach ?>
</ul>

<h2>New Comments</h2>
<?= $this->Form->create(null, [
  'url' => ['controller' => 'Comments', 'action' => 'add']
]); ?>
<?= $this->Form->input('body'); ?>
<?= $this->Form->hidden('post_id', ['value'=>$post->id]); ?>
<?= $this->Form->button('Add'); ?>
<?= $this->Form->end(); ?>
