<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?> 
<div class="empresas form large-9 medium-8 columns content">
    <?= $this->Form->create($empresa) ?>
    <fieldset>
        <legend><?= __('Add Empresa') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('mision');
            echo $this->Form->control('vision');
            echo $this->Form->control('nosotros');
            echo $this->Form->control('correo');
            echo $this->Form->control('telefono');
            echo $this->Form->control('valores');
            echo $this->Form->control('rtn');
            echo $this->Form->control('logo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
