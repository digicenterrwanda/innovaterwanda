<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;

class PagesController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadModel('Company');
        $this->loadModel('Companytype');
        $this->loadModel('Companycategories');
    }

    public function display()
    {
        // Get company information
        $no_companies = $this->Company->find('all')->count();
        $this->set('no_companies', $no_companies);
        
        // Get company category information
        $company_categories = $this->Companycategories->find('all')->toArray();
        $this->set('company_categories', $company_categories);
        
        // Get company type information
        $company_types = $this->Companytype->find('all')->toArray();
        $this->set('company_types', $company_types);
        
        //Get the company details
        $company_details = $this->Company->find('all')->toArray();
        $this->set('company_details', $company_details);
    }
    
    public function whyrwanda()
    {
        
    }
}
