<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Accesslevel Entity
 *
 * @property int $id
 * @property int $Level
 * @property string $Description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employee[] $employees
 */
class Accesslevel extends Entity
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
        'Level' => true,
        'Description' => true,
        'created' => true,
        'modified' => true,
        'employees' => true
    ];
}
