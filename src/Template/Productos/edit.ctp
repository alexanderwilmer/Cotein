<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?> 
<div class="productos form large-9 medium-8 columns content">
    <?= $this->Form->create($producto,["type"=>"file"])  ?>
    <fieldset>
        <legend><?= __('Edit Producto') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('imagen' ,['type' => 'file'   ] );

            echo $this->Form->control('descripcion');
            echo $this->Form->control('marca_id', ['options' => $marcas]);
            echo $this->Form->control('tipo_id', ['options' => $tipos]);
           

        ?>

        <div class="input select">
            <label for="areas">Areas</label>
             <select name="areas[]" multiple="multiple" class="form-control select2  " id="areas">
                 <?php
                     # code...
                  foreach ($areas as   $key => $value) {
                  ?>
                     <option value="<?php echo $key ?>" <?php  if (in_array(  $key  , $area_seleccionada )  ) { echo "selected='selected'"; }  ?>    ><?php echo $value ?>  <?php echo    $key;      ?>     </option> 
                  <?php
                 }

                 ?>
            </select>
            <?php 

            

            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
