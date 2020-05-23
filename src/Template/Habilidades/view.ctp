<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Habilidade $habilidade
 */
?>
 
<div class="habilidades view large-9 medium-8 columns content">
    <h3><?= h($habilidade->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($habilidade->name) ?></td>
        </tr>
      
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($habilidade->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($habilidade->descripcion)); ?>
    </div>
</div>
