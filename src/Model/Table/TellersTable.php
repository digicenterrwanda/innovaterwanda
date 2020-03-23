<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;

use Cake\ORM\Table;

class TellersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('sm_dist_tellers');
        $this->hasMany('Tellertopups');
    }
}
