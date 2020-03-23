<?php

namespace App\Controller;

use App\Controller\AppController;

class ListingsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadModel('Company');
        $this->loadModel('Companytype');
        $this->loadModel('Companycategories');
        $this->loadModel('Services');
        $this->loadComponent('Paginator');
    }

    public function listingsbycategory($id = false) {
        // Display only the first 6 companies
        $company_details = $this->Company->find('all', array('conditions' => array(
                        'organization_category' => $id)))->toArray();
        $this->set('company_details', $company_details);

        // Display only the first 6 companies
        $category_name = $this->Companycategories->find('all', array('conditions' => array(
                        'id' => $id)))->toArray();

        $this->set('category_name', $category_name);

        // Get company type information
        $company_types = $this->Companytype->find('all')->toArray();
        $this->set('company_types', $company_types);

        //Get the category ID
        for ($i = 0; $i < count($company_types); $i++) {
            for ($j = 0; $j < count($company_details); $j++) {
                if ($company_types[$i]['id'] == $company_details[$j]['organization_type']) {
                    $company_details[$j]['organization_type'] = $company_types[$i]['type_name'];
                }
            }
        }
    }

    public $paginate = [
        'limit' => 9,
        'order' => [
            'Company.company_id' => 'asc'
        ],
    ];

    public function searchcompany() {
        if ($this->request->is('post')) {
            $data = $this->request->getData();
        }
    }

    public function enablers()
    {
        $services = $this->Services->find('all')->toArray();
        $this->set('services', $services);
        
        // Gather all the categories available
        $company_categories = $this->Companycategories->find('all', array(
                    'order' => 'Companycategories.category_name ASC',
                    'recursive' => 1,
                ))->toArray();
        $this->set('company_categories', $company_categories);

        // Gather all the types available
        $company_type = $this->Companytype->find('all', array(
                    'order' => 'Companytype.type_name ASC',
                    'recursive' => 1,
                ))->toArray();
        $this->set('company_type', $company_type);

        // Get company information
        $company_details = $this->Company->find('all', array('conditions' => array(
                        'company_classification' => "enabler")));

        $this->set('company_details', $this->paginate($company_details));
        //$this->set('company_details', $company_details);

    }
    
    public function listingbytype($id = false) {
        $company_details = $this->Company->find('all', array('limit' => 6, 'conditions' => array(
                        'organization_type' => $id)))->toArray();

        $this->set('company_details', $company_details);

        // Get company category information
        $company_types = $this->Companytype->find('all', array('conditions' => array(
                        'id' => $id)))->toArray();

        $this->set('company_types', $company_types);

        // Get company category information
        $company_categories = $this->Companycategories->find('all')->toArray();

        $this->set('company_categories', $company_categories);
    }

    public function exportreportsasexcel() {
        if ($this->request->is('post')) {
            $file_name = $this->request->data['file_name'] . "_" . date("Y-m-d h:i:s");
            $output = '<table cellspacing="2" cellpadding="5" style="border:2px;" border="1" width="100%">';
            $output .= $this->request->data['excel_data'];
            header('Content-Type: application/force-download');
            header('Content-disposition: attachment; filename = ' . $file_name . '.xls');
            header("Pragma: ");
            header("Cache-Control: ");
            echo $output;
            die();
        }
    }

    public function allcategories() 
    {
        $services = $this->Services->find('all')->toArray();
        $this->set('services', $services);
        
        // Gather all the categories available
        $company_categories = $this->Companycategories->find('all', array(
                    'order' => 'Companycategories.category_name ASC',
                    'recursive' => 1,
                ))->toArray();
        $this->set('company_categories', $company_categories);

        // Gather all the types available
        $company_type = $this->Companytype->find('all', array(
                    'order' => 'Companytype.type_name ASC',
                    'recursive' => 1,
                ))->toArray();
        
        
        $this->set('company_type', $company_type);

        // Get company information
        //$company_details = $this->Company->find('all');
        $company_details = $this->Company->find('all', array('conditions' => array(
                'company_classification' => "Startup")));

        //Get the category ID
        /* for ($i = 0; $i < count($category_name); $i++) {
          for ($j = 0; $j < count($company_details); $j++) {
          if ($category_name[$i]['id'] == $company_details[$j]['organization_category']) {
          $company_details[$j]['organization_category'] = $category_name[$i]['category_name'];
          }
          }
          }

          //Get the company type ID
          for ($i = 0; $i < count($company_type); $i++) {
          for ($j = 0; $j < count($company_details); $j++) {
          if ($company_type[$i]['id'] == $company_details[$j]['organization_category']) {
          $company_details[$j]['organization_category'] = $company_type[$i]['category_name'];
          }
          }
          } */

        /* $this->paginate = array(
          'limit' => 25
          ); */

        $this->set('company_details', $this->paginate($company_details));
        //$this->set('company_details', $company_details);

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            $company_details = $this->Company->find('all', array('conditions' => array('Company.institution_name LIKE' => '' . $data['top-search'] . '%')));

            $this->set('company_details', $this->paginate($company_details));
        }
    }

    public function listingdetail($id = false) {
        $company_details = $this->Company->find('all', array('conditions' => array(
                        'company_id' => $id)))->toArray();

        // Gather all the categories available
        $category_name = $this->Companycategories->find('all')->toArray();

        //Get the category ID
        for ($i = 0; $i < count($category_name); $i++) {
            for ($j = 0; $j < count($company_details); $j++) {
                if ($category_name[$i]['id'] == $company_details[$j]['organization_category']) {
                    $company_details[$j]['organization_category'] = $category_name[$i]['category_name'];
                }
            }
        }

        $this->set('category_name', $category_name);
        $this->set('company_details', $company_details);
    }

    public function categorychooser() {
        
    }

    public function filtercompanies() {
        //$this->allcategories();
        $company_categories = $this->Companycategories->find('all', array(
                    'order' => 'Companycategories.category_name ASC',
                    'recursive' => 1,
                ))->toArray();
        $this->set('company_categories', $company_categories);

        // Gather all the types available
        $company_type = $this->Companytype->find('all', array(
                    'order' => 'Companytype.type_name ASC',
                    'recursive' => 1,
                ))->toArray();
        
        // Get company information
        $company_filter_details = $this->Company->find('all');
        
        $this->set('company_type', $company_type);

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            if (!empty($data['reg_date']) || !empty($data['company_type']) || !empty($data['company_category'])|| !empty($data['services'])) {
                //Filter by search criteria
                $company_details = $this->Company->find('all', array('conditions' => array(
                        'Company.organization_category = ' => $data['company_category'],
                        'OR' => array(
                            'Company.organization_type = ' => $data['company_type'],
                            'Company.reg_date = ' => $data['reg_date'],
                            'Coompany.service_provided LIKE ' => '/%'.$data['services'].'%/'
                ))));
                $this->set('company_details', $this->paginate($company_details));
            }
            else
            {
                $this->set('company_details', $this->paginate($company_filter_details));
            }
        }
    }
    
    public function filterbytag()
    {
        
    }

}
