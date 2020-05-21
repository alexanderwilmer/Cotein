<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?> 
<div class="empresas form large-9 medium-8 columns content">
    <?= $this->Form->create($empresa) ?>
    <fieldset>
        <legend><?= __('Edit Empresa') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('mision');
            echo $this->Form->control('vision');
            echo $this->Form->control('nosotros');
            echo $this->Form->control('correo');
            echo $this->Form->control('telefono');
            echo $this->Form->control('valores');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
