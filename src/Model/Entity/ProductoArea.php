<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductoArea Entity
 *
 * @property int $id
 * @property int $area_id
 * @property int $producto_id
 *
 * @property \App\Model\Entity\Area $area
 * @property \App\Model\Entity\Producto $producto
 */
class ProductoArea extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'area_id' => true,
        'producto_id' => true,
        'area' => true,
        'producto' => true,
    ];
}
