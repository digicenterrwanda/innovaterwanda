<?php

namespace App\Controller;

use App\Controller\AppController;

class ResourcesController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadModel('Resources');
        $this->loadComponent('Paginator');
    }

    public function index() {
        //Get the resource data
        $resource_info = $this->Resources->find('all');

        $this->set('resource_info', $this->paginate($resource_info));
    }

    public $paginate = [
        'limit' => 10,
        'order' => [
            'Resources.id' => 'asc'
        ],
    ];

}
