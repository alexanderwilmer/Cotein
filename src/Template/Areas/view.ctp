<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Area $area
 */
?> 
<div class="areas view large-9 medium-8 columns content">
    <h3><?= h($area->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($area->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($area->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Producto Areas') ?></h4>
        <?php if (!empty($area->producto_areas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Area Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($area->producto_areas as $productoAreas): ?>
            <tr>
                <td><?= h($productoAreas->id) ?></td>
                <td><?= h($productoAreas->area_id) ?></td>
                <td><?= h($productoAreas->producto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductoAreas', 'action' => 'view', $productoAreas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductoAreas', 'action' => 'edit', $productoAreas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductoAreas', 'action' => 'delete', $productoAreas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoAreas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
