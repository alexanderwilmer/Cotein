<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?> 
<div class="empresas view large-9 medium-8 columns content">
    <h3><?= h($empresa->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($empresa->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($empresa->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($empresa->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rtn') ?></th>
            <td><?= h($empresa->rtn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($empresa->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Mision') ?></h4>
        <?= $this->Text->autoParagraph(h($empresa->mision)); ?>
    </div>
    <div class="row">
        <h4><?= __('Vision') ?></h4>
        <?= $this->Text->autoParagraph(h($empresa->vision)); ?>
    </div>
    <div class="row">
        <h4><?= __('Nosotros') ?></h4>
        <?= $this->Text->autoParagraph(h($empresa->nosotros)); ?>
    </div>
    <div class="row">
        <h4><?= __('Valores') ?></h4>
        <?= $this->Text->autoParagraph(h($empresa->valores)); ?>
    </div>
</div>
