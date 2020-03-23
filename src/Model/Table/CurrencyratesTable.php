<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;

use Cake\ORM\Table;

class CurrencyratesTable extends Table {

    public function initialize(array $config) {
        parent::initialize($config);
        $this->table('sm_currency_conversion');

        $this->belongsTo('Vendors', array(
            'foreignKey' => 'vendor_id',
        ));
    }

}
