<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tipo Entity
 *
 * @property int $id
 * @property string $name
 * @property string $path
 * @property string $descripcion
 *
 * @property \App\Model\Entity\Producto[] $productos
 */
class Tipo extends Entity
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
        'name' => true,
        'descripcion' => true,
        'productos' => true,
    ];
}
