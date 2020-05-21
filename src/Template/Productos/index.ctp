<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto[]|\Cake\Collection\CollectionInterface $productos
 */
?>
<div class="productos index large-9 medium-8 columns content">
    <?= $this->Html->link(__('Agregar'), ['action' => 'add'] ,['class'=>'btn btn-primary pull-right']) ?> 

    <h3><?= __('Productos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marca_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $this->Number->format($producto->id) ?></td>
                <td><?= h($producto->name) ?></td>
                <td><img src="/images/productos/<?= h($producto->path) ?>">   </td>
                <td><?= $producto->has('marca') ? $this->Html->link($producto->marca->name, ['controller' => 'Marcas', 'action' => 'view', $producto->marca->id]) : '' ?></td>
                <td><?= $producto->has('tipo') ? $this->Html->link($producto->tipo->name, ['controller' => 'Tipos', 'action' => 'view', $producto->tipo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), [ 'action' => 'view', $producto->id] ) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->id   ] ) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
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
