<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slider $slider
 */
?> 
<div class="sliders form large-9 medium-8 columns content">
    <?= $this->Form->create($slider ,["type"=>"file"]) ?>
    <fieldset>
        <legend><?= __('Add Slider' ) ?></legend>
        <?php
            echo $this->Form->control('imagen', ['label'=>'Imagen', 'type'=>'file'] );
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
