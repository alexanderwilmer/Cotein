<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productos Model
 *
 * @property \App\Model\Table\MarcasTable&\Cake\ORM\Association\BelongsTo $Marcas
 * @property \App\Model\Table\TiposTable&\Cake\ORM\Association\BelongsTo $Tipos
 * @property \App\Model\Table\ProductoAreasTable&\Cake\ORM\Association\HasMany $ProductoAreas
 * @property \App\Model\Table\ProductoImagenesTable&\Cake\ORM\Association\HasMany $ProductoImagenes
 *
 * @method \App\Model\Entity\Producto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Producto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Producto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Producto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Producto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('productos');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Marcas', [
            'foreignKey' => 'marca_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tipos', [
            'foreignKey' => 'tipo_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('ProductoAreas', [
            'foreignKey' => 'producto_id',
        ]);
        $this->hasMany('ProductoImagenes', [
            'foreignKey' => 'producto_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');


        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['marca_id'], 'Marcas'));
        $rules->add($rules->existsIn(['tipo_id'], 'Tipos'));

        return $rules;
    }
}
