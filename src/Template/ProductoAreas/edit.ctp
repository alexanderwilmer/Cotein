<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoArea $productoArea
 */
?> 
<div class="productoAreas form large-9 medium-8 columns content">
    <?= $this->Form->create($productoArea) ?>
    <fieldset>
        <legend><?= __('Edit Producto Area') ?></legend>
        <?php
            echo $this->Form->control('area_id', ['options' => $areas]);
            echo $this->Form->control('producto_id', ['options' => $productos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
