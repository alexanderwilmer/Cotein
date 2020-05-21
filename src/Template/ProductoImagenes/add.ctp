<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoImagene $productoImagene
 */
?> 
<div class="productoImagenes form large-9 medium-8 columns content">
    <?= $this->Form->create($productoImagene,["type"=>"file"]) ?>
    <fieldset>
        <legend><?= __('Add Producto Imagene') ?></legend>
        <?php
            echo $this->Form->control('imagen',["type"=>"file",'required'=>'true'] );
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
