<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logro $logro
 */
?> 
<div class="logros view large-9 medium-8 columns content">
    <h3><?= h($logro->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($logro->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($logro->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($logro->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($logro->descripcion)); ?>
    </div>
</div>
