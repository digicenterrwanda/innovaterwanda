<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class SubscribersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('sm_subscriber_details');
        $this->belongsTo('Serviceproviders',
            array('foreign_key'=>'provider_id'
        ));
    }
}