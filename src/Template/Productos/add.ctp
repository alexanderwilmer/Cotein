<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?> 
<div class="productos form large-9 medium-8 columns content">
    <?= $this->Form->create($producto ,["type"=>"file"])  ?>
    <fieldset>
        <legend><?= __('Add Producto') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('imagen'  ,['type' => 'file' ,'required'=> 'true','label'=>"Imagen" ]  );
            echo $this->Form->control('descripcion');
            echo $this->Form->control('marca_id', ['options' => $marcas]);
            echo $this->Form->control('tipo_id', ['options' => $tipos]);
            echo $this->Form->input('areas', ['options' => $areas, 'empty' => true,"class"=>"form-control select2" ,'multiple'=>"true"]); 
                   ?>
 
          </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
