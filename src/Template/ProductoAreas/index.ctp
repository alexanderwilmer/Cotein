<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoArea[]|\Cake\Collection\CollectionInterface $productoAreas
 */
?> 
<div class="productoAreas index large-9 medium-8 columns content">
    <?= $this->Html->link(__('Agregar'), ['action' => 'add'] ,['class'=>'btn btn-primary pull-right']) ?> 

    <h3><?= __('Producto Areas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productoAreas as $productoArea): ?>
            <tr>
                <td><?= $this->Number->format($productoArea->id) ?></td>
                <td><?= $productoArea->has('area') ? $this->Html->link($productoArea->area->name, ['controller' => 'Areas', 'action' => 'view', $productoArea->area->id]) : '' ?></td>
                <td><?= $productoArea->has('producto') ? $this->Html->link($productoArea->producto->name, ['controller' => 'Productos', 'action' => 'view', $productoArea->producto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productoArea->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productoArea->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productoArea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoArea->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
