<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;

use Cake\ORM\Table;

class TellertopupsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('sm_teller_topups');
        $this->belongsTo('Tellers', array(
            'foreignKey' => 'teller_id',
        ));

        $this->belongsTo('Distlink', array(
            'foreignKey' => 'distributor_id',
        ));
    }
}
