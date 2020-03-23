<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class CompanytypeTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('em_company_types');
    }
}