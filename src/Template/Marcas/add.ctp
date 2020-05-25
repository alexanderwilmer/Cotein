<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca $marca
 */
?>  
<div class="marcas form large-9 medium-8 columns content">
    <?= $this->Form->create($marca,['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Marca') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('descripcion');

            echo $this->Form->control('url',['type'=>'url','required'=>'required' ]);

            echo $this->Form->control('imagen',['type'=>'file','label'=>'Imagen','required'=>'true'] );
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
