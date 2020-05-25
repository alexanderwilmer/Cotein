<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $descripcion
 * @property string $mision
 * @property string $vision
 * @property string $nosotros
 * @property string $correo
 * @property string|null $telefono
 * @property string|null $valores
 * @property string|null $rtn
 * @property string|null $logo
 */
class Empresa extends Entity
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
        'mision' => true,
        'vision' => true,
        'nosotros' => true,
        'correo' => true,
        'telefono' => true,
        'valores' => true,
        'rtn' => true,
        'logo' => true,
    ];
}
