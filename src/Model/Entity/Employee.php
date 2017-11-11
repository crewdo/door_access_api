<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string $EmployeeID
 * @property string $Name
 * @property int $accesslevel_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Accesslevel $accesslevel
 * @property \App\Model\Entity\Card[] $cards
 */
class Employee extends Entity
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
        'EmployeeID' => true,
        'Name' => true,
        'accesslevel_id' => true,
        'created' => true,
        'modified' => true,
        'accesslevel' => true,
        'cards' => true
    ];
}
