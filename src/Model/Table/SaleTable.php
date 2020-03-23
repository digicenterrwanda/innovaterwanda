<?php

/* FILE NAME: SalesTable.php
 * PURPOSE: Holds the database model definitions where the sales will be recorded
 * WRITTEN BY: Clovis Wanziguya, Mvend Kigali. 2nd October 2018
 * MODIFIED BY: Clovis Wanziguya, Mvend Kigali. 18th October 2018
 * MODIFICATIONS MADE: 
 *  - Added the association of Products and Tellers tables
 * 
 */

namespace App\Model\Table;

use Cake\ORM\Table;

class SaleTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('sm_vending_transactions');
        $this->belongsTo('Products', array('foreign_key'=>'product_id'));
        $this->belongsTo('Tellers', array('foreign_key'=>'teller_id'));
        $this->belongsTo('Distributors');
        $this->belongsTo('Currencyrates');
        $this->belongsTo('Serviceproviders');
    }
}

