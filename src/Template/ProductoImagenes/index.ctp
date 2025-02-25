<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoImagene[]|\Cake\Collection\CollectionInterface $productoImagenes
 */
?> 
<div class="productoImagenes index large-9 medium-8 columns content">
    <h3><?= __('Producto Imagenes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productoImagenes as $productoImagene): ?>
            <tr>
                <td><?= $this->Number->format($productoImagene->id) ?></td>
                <td><?= h($productoImagene->name) ?></td>
                <td><?= h($productoImagene->path) ?></td>
                <td><?= $productoImagene->has('producto') ? $this->Html->link($productoImagene->producto->name, ['controller' => 'Productos', 'action' => 'view', $productoImagene->producto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productoImagene->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productoImagene->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productoImagene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoImagene->id)]) ?>
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
