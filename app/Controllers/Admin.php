<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        echo "hello";
    }

    // public function insert()
    // {       
    //     $user_data =[
    //         'username'   =>$this->request->getVar('username'),
    //         'type'       =>$this->request->getVar('type'),
    //         'gender'     =>$this->request->getVar('gender'),
    //         'age'        =>$this->request->getVar('age'),
    //         'country'    =>$this->request->getVar('country'),
    //         'postarea'   =>$this->request->getVar('postarea'),
    //         'city'       =>$this->request->getVar('city'),
    //         'coins'      =>$this->request->getVar('coins'),
    //         'status'     =>$this->request->getVar('status'),
    //         'profiletext'=>$this->request->getVar('profiletext'),      
    //         'name'       =>$this->request->getVar('name'), 
    //         'residence'  =>$this->request->getVar('residence'),
    //         'profession' =>$this->request->getVar('profession'),
    //         'family'     => $this->request->getVar('family'), 
    //         'hobbies'    =>$this->request->getVar('hobbies')];

    //         $db =\config\Database::connect(); 
    //         $data= $db->table('profile');
    //         $data->insert($user_data);              
        
    // }



    public function create_profile()
    {       
            $data = [];
    
            if ($this->request->getMethod() == 'post') {               
                $detail = [
                    'username' => 'rahul@123',
                    'type'    => 'customer',
                    'gender'  => 'male',
                    'age'     => 25,
                    'country'    => 'india',
                    'postarea'    => 'baijnath',
                    'city'    => 'mandi',
                    'coins'    => '200',
                    'status'    => 'live',
                    'profiletext'    => '',        
                    'name'    => 'Rahul verma', 
                    'residence'    => 'mohali', 
                    'profession'    => '',
                    'family'    => '', 
                    'hobbies'    => '', 
                        ];

    
                if ($this->detail) {

                    $insert_data = new \App\Models\Admin();
                    $insert_data->insert($detail);
                    $session->setFlashdata('msg', 'Record Inserted successfully');

                    }
                    else
                    {
                        echo "something went wrong";
                        return view('register');    
                    }           
                    
                } 
            
                return redirect()->to(base_url('register'));
            }

                public function Profile_Update_Data(){

                    $data = array(
                    'username'=> $this->input->post('username'),
                    'type'=> $this->input->post('type'),
                    'gender'=> $this->input->post('gender'),
                    'age'=> $this->input->post('age'),
                    'country'=> $this->input->post('country'),
                    'postarea'=> $this->input->post('postarea'),
                    'city'=> $this->input->post('city'),
                    'coins'=> $this->input->post('coins'),
                    'status'=> $this->input->post('status'),
                    'profiletext'=> $this->input->post('profiletext'),
                    'name'=> $this->input->post('name'),
                    'residence'=> $this->input->post('residence'),
                    'profession'=> $this->input->post('profession'),
                    'family'=> $this->input->post('family'),
                    'hobbies'=> $this->input->post('hobbies'),
                    );
                    $this->Admin->update_records($data);
                    $session->setFlashdata('msg', 'Record Inserted successfully');


                }
        }





