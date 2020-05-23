<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Habilidades Model
 *
 * @method \App\Model\Entity\Habilidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Habilidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Habilidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Habilidade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Habilidade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Habilidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Habilidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Habilidade findOrCreate($search, callable $callback = null, $options = [])
 */
class HabilidadesTable extends Table
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

        $this->setTable('habilidades');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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

        $validator
            ->scalar('imagen')
            ->maxLength('imagen', 255)
            ->allowEmptyFile('imagen');

        return $validator;
    }
}
