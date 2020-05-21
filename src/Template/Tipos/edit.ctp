<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipo $tipo
 */
?> 
<div class="tipos form large-9 medium-8 columns content">
    <?= $this->Form->create($tipo) ?>
    <fieldset>
        <legend><?= __('Edit Tipo') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
