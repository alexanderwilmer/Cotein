<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?> 
<div class="productos view large-9 medium-8 columns content">
    <h3><?= h($producto->name) ?></h3>    
    
    <div class="row">
      
        <div class="  large-7 columns medium-4">

            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($producto->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Marca') ?></th>
                    <td><?= $producto->has('marca') ? $this->Html->link($producto->marca->name, ['controller' => 'Marcas', 'action' => 'view', $producto->marca->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Tipo') ?></th>
                    <td><?= $producto->has('tipo') ? $this->Html->link($producto->tipo->name, ['controller' => 'Tipos', 'action' => 'view', $producto->tipo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($producto->id) ?></td>
                </tr>
            </table>
       <?= $this->Html->link(__('Editar producto'), ['action' => 'edit', $producto->id   ],['class'=>'btn btn-primary pull-right'] ) ?>
       <?= $this->Html->link(__('Agregar imagenes'), ['controller' => 'ProductoImagenes', 'action' => 'add',$producto->id  ],['class'=>'btn btn-primary  pull-right']) ?>

        </div>
        <div class="  large-4 columns medium-4">

      
        <br>
            <img src="/images/productos/<?= h($producto->path) ?>">
        </div>
    </div>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($producto->descripcion)); ?>
    </div>
    <div class="related">
        <h4><?= __('  Producto Areas') ?></h4>
        <?php if (!empty($producto->producto_areas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Area  ') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($areas as $productoAreas): ?>
            <tr>
                <td><?= h($productoAreas->id) ?></td>
                <td><?= h($productoAreas->area->name) ?></td>
                <td class="actions">
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductoAreas', 'action' => 'delete', $productoAreas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoAreas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('  Producto Imagenes') ?></h4>
        <?php if (!empty($producto->producto_imagenes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Path') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($producto->producto_imagenes as $productoImagenes): ?>
            <tr>
                <td><?= h($productoImagenes->id) ?></td>
                <td>
                    <img src="/images/productos/<?= h($productoImagenes->path) ?>">
                </td>
                <td class="actions">
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductoImagenes', 'action' => 'delete', $productoImagenes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoImagenes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
