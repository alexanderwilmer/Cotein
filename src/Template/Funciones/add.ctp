<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcione $funcione
 */
?>
 
<div class="funciones form large-9 medium-8 columns content">
    <?= $this->Form->create($funcione) ?>
    <fieldset>
        <legend><?= __('Add Funcione') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
