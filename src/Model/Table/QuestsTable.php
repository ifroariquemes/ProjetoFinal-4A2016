<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quests Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Temas
 * @property \Cake\ORM\Association\HasMany $Pontos
 *
 * @method \App\Model\Entity\Quest get($primaryKey, $options = [])
 * @method \App\Model\Entity\Quest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Quest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Quest|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Quest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Quest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Quest findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuestsTable extends Table
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

        $this->table('quests');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Temas', [
            'foreignKey' => 'tema_id'
        ]);
        $this->hasMany('Pontos', [
            'foreignKey' => 'quest_id'
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
            ->decimal('pont')
            ->allowEmpty('pont');

        $validator
            ->allowEmpty('enunci');

        $validator
            ->allowEmpty('resposta1');

        $validator
            ->allowEmpty('resposta2');

        $validator
            ->allowEmpty('respostaCorreta');

        $validator
            ->allowEmpty('resposta4');

        $validator
            ->allowEmpty('resposta5');

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
        $rules->add($rules->existsIn(['tema_id'], 'Temas'));

        return $rules;
    }
}
