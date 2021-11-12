<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Admin extends BaseController
{
   

    
    public $model;

    public function __construct()
    {
        
        //parent::__construct(); 

       $this->model= new \App\Models\Admin; 
       $this->session = \Config\Services::session();
     
       
    }

    public function index()
    {
        echo "welcome to chat system project";
    }


     function register_profile(){

        return view('register');
    }

    function user_profile(){

        return view('profile');
    }


    function dashboard(){
    
        return view('dashboard');

    }

    function Login(){
    
        return view('Login');

    }

    function operator(){
    
        return view('operator');

    }

    function chat(){
    
        return view('chat');

    }
   

     function create_user(){
        $session = session();
        if($_POST['password']==$_POST['confirm_password']){
            $data = array(
                'name' => $_POST['name'],                    
                'email'  => $_POST['email'],
                'password'=>md5($_POST['password']),
                'role'=>$_POST['role'],
            );
            $res = $this->model ->insert_create_user($data);
    
            if ($res=='1' || $res==1){
                $this->session->set('msg','User Created Successfully');
                $page['view_data'] =$this->session->get('msg'); // Normal way
                $page['session'] =$this->session;  
                header('Content-Type: application/json');
                echo json_encode($res);
                die;
               
               
            }else{
                $this->session->set_flashdata('error', 'Something went wrong');
            }

    }else{
        echo "password didn't match";
    }

     }




     function login_user(){
        $data = array(
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
        );
        $data = $this->model->user_login($data);
        $this->session->set('UserLogin',$data);      
        if($data){
            return json_encode($data);
        }

     }

    function logout(){
        $session = session();
        $user = $session->get('UserLogin');
        if($user){
            $session->destroy();
            return view('login');
        }
    }



     function create_profile()
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

                    $res = $this->model ->insert_data($detail);
                    if ($res){
  
                        return view('');
                    }else{
                        $session->setFlashdata('error', 'something went wrong');
                    }

                    
                } 
            
                return redirect()->to(base_url('register'));
            }

                 function Profile_Update_Data(){

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
        
                    $res = $this->model ->update_records($data);
                    
                    if($res){
                        $session->setFlashdata('msg', 'Record Inserted successfully');
                        return view('');
                    }else{
                        $session->setFlashdata('error', 'something went wrong');
                    }


                }

                function Add_Manually_Coin(){
                    
                    $coin = $this->input->post('coin');
                    $res = $this->model ->insert_coin($data);
                    if ($res){
                        $session->setFlashdata('msg', 'Coin Inserted successfully');
                        return view('');
                    }else{
                        $session->setFlashdata('error', 'something went wrong');
                    }
                    
                }

                function users(){

                    $data['allusers']=$this->model->getAllusers();
                    // echo "<pre>"; 
                    // print_r($data);die;
                                     
                    return view('users', $data);
                }


        }





