<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property string $name
 * @property string $path
 * @property string $descripcion
 * @property int $marca_id
 * @property int $tipo_id
 *
 * @property \App\Model\Entity\Marca $marca
 * @property \App\Model\Entity\Tipo $tipo
 * @property \App\Model\Entity\ProductoArea[] $producto_areas
 * @property \App\Model\Entity\ProductoImagene[] $producto_imagenes
 */
class Producto extends Entity
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
        'id' => true,

        'name' => true,
        'path' => true,
        'descripcion' => true,
        'marca_id' => true,
        'tipo_id' => true,
        'marca' => true,
        'tipo' => true,
        'producto_areas' => true,
        'producto_imagenes' => true,
    ];
}
