<!DOCTYPE html>
<html lang='ja'>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('styles.css') ?>
</head>
<body>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
