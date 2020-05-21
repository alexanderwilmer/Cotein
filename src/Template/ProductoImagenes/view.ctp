<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoImagene $productoImagene
 */
?> 
<div class="productoImagenes view large-9 medium-8 columns content">
    <h3><?= h($productoImagene->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($productoImagene->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($productoImagene->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $productoImagene->has('producto') ? $this->Html->link($productoImagene->producto->name, ['controller' => 'Productos', 'action' => 'view', $productoImagene->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productoImagene->id) ?></td>
        </tr>
    </table>
</div>
