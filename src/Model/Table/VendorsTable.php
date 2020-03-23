<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class VendorsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('sm_vendors');
        $this->hasMany('Serviceproviders');
        $this->hasMany('Distributors');
        $this->hasMany('Distlink');
        $this->hasMany('Distopup');
    }
}