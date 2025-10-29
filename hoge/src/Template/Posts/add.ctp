<?php
  $this->assign('title', 'Add new');
?>

<h1>
  <?= $this->Html->link('Back', ['action' => 'index'], ['class' => ['fs12', 'flr']]); ?>
  Add new
</h1>

<?= $this->Form->create($post); ?>
<?= $this->Form->input('title'); ?>
<?= $this->Form->input('body', ['rows'=>'3']); ?>
<?= $this->Form->button('Add', ['rows'=>'3']); ?>
<?= $this->Form->end(); ?>

