<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class CompanyTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('em_company_information');
        $this->belongsTo('Companytype');
        $this->belongsTo('Companycategories');
    }
}