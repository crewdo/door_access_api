<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accesslevels Model
 *
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\Accesslevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Accesslevel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Accesslevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Accesslevel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Accesslevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Accesslevel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Accesslevel findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccesslevelsTable extends Table
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

        $this->setTable('accesslevels');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employees', [
            'foreignKey' => 'accesslevel_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->integer('Level')
            ->requirePresence('Level', 'create')
            ->notEmpty('Level');

        $validator
            ->scalar('Description')
            ->requirePresence('Description', 'create')
            ->notEmpty('Description');

        return $validator;
    }
}
