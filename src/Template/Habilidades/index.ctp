<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Habilidade[]|\Cake\Collection\CollectionInterface $habilidades
 */
?>
 
<div class="habilidades index large-9 medium-8 columns content">
         <?= $this->Html->link(__('Agregar'), ['action' => 'add'] ,['class'=>'btn btn-primary pull-right']) ?> 
    
    <h3><?= __('Habilidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($habilidades as $habilidade): ?>
            <tr>
                <td><?= $this->Number->format($habilidade->id) ?></td>
                <td><?= h($habilidade->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $habilidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $habilidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $habilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $habilidade->id)]) ?>
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
