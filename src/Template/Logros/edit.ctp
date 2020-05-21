<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logro $logro
 */
?> 
<div class="logros form large-9 medium-8 columns content">
    <?= $this->Form->create($logro) ?>
    <fieldset>
        <legend><?= __('Edit Logro') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('path');
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
