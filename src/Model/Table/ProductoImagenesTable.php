<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductoImagenes Model
 *
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\BelongsTo $Productos
 *
 * @method \App\Model\Entity\ProductoImagene get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductoImagene newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductoImagene[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductoImagene|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductoImagene saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductoImagene patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductoImagene[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductoImagene findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductoImagenesTable extends Table
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

        $this->setTable('producto_imagenes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Productos', [
            'foreignKey' => 'producto_id',
            'joinType' => 'INNER',
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
            ->scalar('path')
            ->maxLength('path', 255)
            ->requirePresence('path', 'create')
            ->notEmptyString('path');

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
        $rules->add($rules->existsIn(['producto_id'], 'Productos'));

        return $rules;
    }
}
