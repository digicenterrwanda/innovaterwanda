<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class NotificationsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('em_notifications');
        //$this->belongsTo('em_company_information');
    }
}