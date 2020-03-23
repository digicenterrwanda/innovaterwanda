<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class UserrolesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('em_user_levels');
        //$this->belongsTo('Company', array('foreign_key'=>'id'));
    }
}