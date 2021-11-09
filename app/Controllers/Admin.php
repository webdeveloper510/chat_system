<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{

    public function __construct()
    {
        parent::__construct(); 

        $model = new Admin();    
    }

    public function index()
    {
        echo "hello";
    }

    // public function insert()
    // {       
    //     $user_data =[
    //         'username'   =>$this->request->getVar('username'),
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

    public function users_profile(){

            $res= $model->fetch_role_id();
            $user_role_id =$res['id'];
             
            $data = [
                'id' =>$this->input->post('id'),
                'name' => $this->input->post('name'),                    
                'email'  => $this->input->post('email'),
                'role'     => $user_role_id,
                'password'    => $this->input->post('password'),
                'created_at'    => $this->input->post('created_at'),
                'updated_at'    =>$this->input->post('updated_at'),  

                 ];

                 $user_data = $model ->insert_users_data($data);
                    if ($user_data){
                        $session->setFlashdata('msg', 'Record Inserted successfully');
                        return view('');
                    }else{
                        $session->setFlashdata('error', 'something went wrong');
                    }

        

    }



    public function create_profile()
    {       
            $data = [];

    
            if ($this->request->getMethod() == 'post') {               
                $detail = [
                    'user_id' =>$this->input->post('user_id'),
                    'username' => $this->input->post('username'),                    
                    'gender'  => $this->input->post('gender'),
                    'age'     => $this->input->post('age'),
                    'country'    => $this->input->post('country'),
                    'postarea'    => $this->input->post('postarea'),
                    'city'    =>$this->input->post('city'),
                    'coins'    => $this->input->post('coins'),
                    'status'    => $this->input->post('status'),
                    'profiletext'    =>$this->input->post('profiletext'),
                    'name'    => $this->input->post('name'),
                    'residence'    =>$this->input->post('residence'),
                    'profession'    =>$this->input->post('profession'),
                    'family'    =>$this->input->post('family'),
                    'hobbies'    =>$this->input->post('hobbies'),
                        ];

                    $res = $model ->insert_data($detail);
                    if ($res){
                        $session->setFlashdata('msg', 'Record Inserted successfully');
                        return view('');
                    }else{
                        $session->setFlashdata('error', 'something went wrong');
                    }

                    
                } 
            
                return redirect()->to(base_url('register'));
            }

                public function Profile_Update_Data(){

                    $data = array(
                    'username'=> $this->input->post('username'),                    
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
        
                    $res = $model ->update_records($data);
                    
                    if($res){
                        $session->setFlashdata('msg', 'Record Inserted successfully');
                        return view('');
                    }else{
                        $session->setFlashdata('error', 'something went wrong');
                    }


                }

                function Add_Manually_Coin(){
                    
                    $coin = $this->input->post('coin');
                    $res = $model ->insert_coin($data);
                    if ($res){
                        $session->setFlashdata('msg', 'Coin Inserted successfully');
                        return view('');
                    }else{
                        $session->setFlashdata('error', 'something went wrong');
                    }
                    
                }


        }





