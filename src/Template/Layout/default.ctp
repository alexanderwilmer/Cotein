<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'COTEIN ADMIN';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/jquery.js"></script>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style2.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link href="/plugin/select2/select2.min.css" rel="stylesheet">

    <script src="/js/jquery.js"></script>
    <script src="/plugin/select2/select2.min.js"></script>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="  clearfix">

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Areas de trabajo'), ['controller' => 'Areas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Marcas'), ['controller' => 'Marcas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tipos'), ['controller' => 'Tipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Empresa'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Sliders'), ['controller' => 'Sliders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Patners'), ['controller' => 'Partners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Logros'), ['controller' => 'Logros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Que hacemos'), ['controller' => 'Funciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Habilidades'), ['controller' => 'Habilidades', 'action' => 'index']) ?></li>

    </ul>
</nav>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>

    <script src="/js/bootstrap.min.js"></script>

     <script type="text/javascript">
        
        $('.select2').select2()
    </script>
</body>
</html>
