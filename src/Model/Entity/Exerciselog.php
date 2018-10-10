<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Exerciselog Entity
 *
 * @property int $id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $logdate
 * @property int $duration
 * @property int $distance
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $comments
 *
 * @property \App\Model\Entity\User $user
 */
class Exerciselog extends Entity
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
        'user_id' => true,
        'logdate' => true,
        'duration' => true,
        'distance' => true,
        'created' => true,
        'modified' => true,
        'comments' => true,
        'user' => true
    ];
}
