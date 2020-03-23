<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;

class CompaniesController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadModel('Company');
        $this->loadModel('Companytype');
        $this->loadModel('Companycategories');
    }

    public function newcompany() {
        //Get the company types and categories
        $this->getcompanytypes();
        $this->getcompanycategories();

        $company_info = $this->Company->newEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            //Check if image has been uploaded
            // Note: the array keys here may not be exactly right, use pr($data) to look at it and make any required corrections. I've made a guess that MasiniSh isn't needed now.
            // Note2: it would be a more "Cake" solution to move this if block to the beforeMarshal function of the MasiniSh table class
            if (!empty($data['company_logo']['name'])) {
                $file = $data['company_logo']; //put the data into a var for easy use

                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                $arr_ext = array('jpg', 'jpeg', 'png', 'gif'); //set allowed extensions
                //only process if the extension is valid
                if (in_array($ext, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . 'uploads/' . $file['name']);

                    //prepare the filename for database entry
                    $data['company_logo'] = $file['name'];
                } else {
                    // You probably want to unset the imagine key from the data here, and maybe delete the temp file?
                }

                //now update the entity and do the save
                $company_info = $this->Company->patchEntity($company_info, $data);

                if ($this->Company->save($company_info)) {
                    $this->Flash->success(__('Company info has been saved successfully ... '));

                    return $this->redirect(['action' => 'viewcompanies']);
                } else {
                    $this->Flash->error(__('The company information could not be saved. Please, try again.'));
                }

                $this->set('company_info', $company_info);
            }
        }
    }

    public function viewcompanies() {
        $company_info = $this->Company->find('all');

        $this->paginate = array(
            'limit' => 10
        );

        $this->set(compact('company_info', $this->paginate($company_info)));
    }

    public function editcompany($id = false) {

        if ($this->Auth->user('company_id') > 0) {
            $company = $this->Company->get($id);
            $this->set('company_details', $company);

            //Get the company types and categories
            $this->getcompanytypes();
            $this->getcompanycategories();

            //Update the record in the database
            if ($this->request->is(['post', 'put'])) {
                $data = $this->request->getData();
                //Check if image has been uploaded
                // Note: the array keys here may not be exactly right, use pr($data) to look at it and make any required corrections. I've made a guess that MasiniSh isn't needed now.
                // Note2: it would be a more "Cake" solution to move this if block to the beforeMarshal function of the MasiniSh table class
                if (!empty($data['company_logo']['name'])) {
                    $file = $data['company_logo']; //put the data into a var for easy use

                    $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                    $arr_ext = array('jpg', 'jpeg', 'png', 'gif'); //set allowed extensions
                    //only process if the extension is valid
                    if (in_array($ext, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($file['tmp_name'], WWW_ROOT . 'uploads/' . $file['name']);

                        //prepare the filename for database entry
                        $data['company_logo'] = $file['name'];
                    } else {
                        // You probably want to unset the imagine key from the data here, and maybe delete the temp file?
                    }

                    //now update the entity and do the save
                    $company_info = $this->Company->patchEntity($company, $data);

                    if ($this->Company->save($company_info)) {
                        $this->Flash->success(__('Company info has been updated successfully ... '));

                        return $this->redirect(['action' => 'mycompany']);
                    } else {
                        $this->Flash->error(__('The company information could not be updated. Please, try again.'));
                    }

                    $this->set('company_info', $company_info);
                }
            }
        } else {
            $company = $this->Company->get($id);
            $this->set('company_details', $company);

            //Get the company types and categories
            $this->getcompanytypes();
            $this->getcompanycategories();

            //Update the record in the database
            if ($this->request->is(['post', 'put'])) {
                $data = $this->request->getData();
                //Check if image has been uploaded
                // Note: the array keys here may not be exactly right, use pr($data) to look at it and make any required corrections. I've made a guess that MasiniSh isn't needed now.
                // Note2: it would be a more "Cake" solution to move this if block to the beforeMarshal function of the MasiniSh table class
                if (!empty($data['company_logo']['name'])) {
                    $file = $data['company_logo']; //put the data into a var for easy use

                    $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                    $arr_ext = array('jpg', 'jpeg', 'png', 'gif'); //set allowed extensions
                    //only process if the extension is valid
                    if (in_array($ext, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($file['tmp_name'], WWW_ROOT . 'uploads/' . $file['name']);

                        //prepare the filename for database entry
                        $data['company_logo'] = $file['name'];
                    } else {
                        // You probably want to unset the imagine key from the data here, and maybe delete the temp file?
                    }

                    //now update the entity and do the save
                    $company_info = $this->Company->patchEntity($company, $data);

                    if ($this->Company->save($company_info)) {
                        $this->Flash->success(__('Company info has been updated successfully ... '));

                        return $this->redirect(['action' => 'viewcompanies']);
                    } else {
                        $this->Flash->error(__('The company information could not be updated. Please, try again.'));
                    }

                    $this->set('company_info', $company_info);
                }
            }
        }
    }

    public function getcompanytypes() {
//Get the Products that match the Provider ID above
        $company_types = $this->Companytype->find('all')->toArray();
        $this->set('company_types', $company_types);
    }

    public function getcompanycategories() {
//Get the Products that match the Provider ID above
        $company_categories = $this->Companycategories->find('all')->toArray();
        $this->set('company_categories', $company_categories);
    }

    public function companydetails($id = false) {
        $company = $this->Company->get($id);

        $this->set('company_details', $company);
    }

    public function mycompany() {
        $company = $this->Company->get($this->Auth->user('company_id'));

        $this->set('company_details', $company);
    }

    public function isAuthorized($user) {
        if (isset($user['access_level'])) {
            return true;
        }
        return parent::isAuthorized($user);
    }

}
