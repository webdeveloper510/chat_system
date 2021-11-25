<?php
namespace App\Controllers;
require 'vendor/autoload.php';

use App\Controllers\BaseController;

class Admin extends BaseController
{    
    public $model;
    public $input;


    public function __construct()
    {
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
        $data['alluserprofile']= $this->model->getAllprofile();  
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

                $existusers = $this->model->getDataById('email', $_POST['email'],'users');
                if($existusers){
                   echo "data";
                   die;
                   
                }

            $res = $this->model ->insert_create_user($data);
         
            if ($res=='1' || $res==1){
                $this->session->set('msg','User Created Successfully');
                $page['view_data'] =$this->session->get('msg'); 
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


 
     function create_user_profile()
    {              
                $detail = [    
                    'user_id'    =>$_POST['id'],  
                    'username'   =>$_POST['username'],  
                    'type'       =>$_POST['type'],             
                    'gender'     =>$_POST['gender'],
                    'age'        =>$_POST['age'],
                    'country'    =>$_POST['country'],
                    'postarea'   =>$_POST['postarea'],
                    'city'       =>$_POST['city'],
                    'coins'      =>$_POST['coins'],
                    'status'     =>$_POST['status'],
                    'profiletext'=>$_POST['profiletext'],
                    'name'       =>$_POST['name'],
                    'residence'  =>$_POST['residence'],
                    'profession' =>$_POST['profession'],
                    'family'     =>$_POST['family'],
                    'hobbies'    =>$_POST['hobbies'],
                    'created_at' =>date('d-m-y H:i:s'),
                    'updated_at' =>date('d-m-y H:i:s') 

                 
                ];

                
                $data =$this->model->getDataById('user_id', $_POST['id'],'profile');
            
                if($data){
                    $detail['coins']=$data[0]->coins+$detail['coins'];
                    $userdata = $this->model->updateUserData($detail);                 
                    echo  $userdata==1 ? 'update': '';                  

                }
             
                else{                
                    $res = $this->model->insert_data($detail);
                    if ($res==1 || $res=='1'){
                        echo 1;

                    }else{
                        $session->setFlashdata('error', 'something went wrong');
                    }   
                }                           
                             
            }

                    

            function users(){

                $data['allusers']= $this->model->getAllusers();  

                $data['allprofile']=$this->model->getAllusersprofile();
                                    
                return view('/users', $data);
            }





            function getusersprofile($id){
            $data['getUserProfileData'] = $this->model->getUsersById($id);                   
            return view('/chat',$data);
            }  
            
            
            function chat_page(){
                return view('chat_page');
            }

   


    }

               
                


        





