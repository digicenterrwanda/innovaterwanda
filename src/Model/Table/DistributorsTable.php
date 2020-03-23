<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class DistributorsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('sm_distributor_details');
    }
}