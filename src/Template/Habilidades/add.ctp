<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Habilidade $habilidade
 */
?>
 
<div class="habilidades form large-9 medium-8 columns content">
    <?= $this->Form->create($habilidade) ?>
    <fieldset>
        <legend><?= __('Add Habilidade') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
