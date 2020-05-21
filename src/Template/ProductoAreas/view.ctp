<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoArea $productoArea
 */
?> 
<div class="productoAreas view large-9 medium-8 columns content">
    <h3><?= h($productoArea->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= $productoArea->has('area') ? $this->Html->link($productoArea->area->name, ['controller' => 'Areas', 'action' => 'view', $productoArea->area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $productoArea->has('producto') ? $this->Html->link($productoArea->producto->name, ['controller' => 'Productos', 'action' => 'view', $productoArea->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productoArea->id) ?></td>
        </tr>
    </table>
</div>
