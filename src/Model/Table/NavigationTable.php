<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class NavigationTable extends Table {

    public function initialize(array $config) {
        $this->table('em_access_rights');
        $this->addBehavior('Timestamp');
    }

}
    