<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcione $funcione
 */
?>
 
<div class="funciones view large-9 medium-8 columns content">
    <h3><?= h($funcione->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($funcione->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($funcione->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($funcione->descripcion)); ?>
    </div>
</div>
