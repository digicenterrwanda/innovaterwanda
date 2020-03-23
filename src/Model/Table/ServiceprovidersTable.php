<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;

use Cake\ORM\Table;

class ServiceprovidersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('sm_service_providers');
        $this->belongsTo('Vendors');
        $this->belongsTo('Subscribers',
            array('foreign_key'=>'provider_id'
        ));
    }
}
