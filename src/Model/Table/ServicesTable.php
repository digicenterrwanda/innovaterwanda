<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ServicesTable extends Table {

    public function initialize(array $config) {
        $this->table('em_services');
    }

}
