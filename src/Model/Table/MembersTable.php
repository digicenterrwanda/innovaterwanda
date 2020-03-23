<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class MembersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('mvd_members');
        $this->belongsToMany('Groups');
        $this->hasMany('Accounts');
    }
}