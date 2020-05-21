<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoImagene $productoImagene
 */
?> 
<div class="productoImagenes form large-9 medium-8 columns content">
    <?= $this->Form->create($productoImagene) ?>
    <fieldset>
        <legend><?= __('Edit Producto Imagene') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('path');
            echo $this->Form->control('producto_id', ['options' => $productos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
