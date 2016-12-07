<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quest Entity
 *
 * @property int $id
 * @property int $tema_id
 * @property float $pont
 * @property string $enunci
 * @property string $resposta1
 * @property string $resposta2
 * @property string $respostaCorreta
 * @property string $resposta4
 * @property string $resposta5
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Tema $tema
 * @property \App\Model\Entity\Ponto[] $pontos
 */
class Quest extends Entity
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
        '*' => true,
        'id' => false
    ];
}
