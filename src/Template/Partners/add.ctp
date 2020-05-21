<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partner $partner
 */
?>
 
<div class="partners form large-9 medium-8 columns content">
    <?= $this->Form->create($partner,['type'=>'file' ] ) ?>
    <fieldset>
        <legend><?= __('Add Partner') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('imagen',['type'=>'file','label'=>'Imagen','required'=>true  ] );

            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
