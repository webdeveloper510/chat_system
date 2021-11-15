<?php

namespace App\Models;

use CodeIgniter\Model;


class Admin extends Model
{
    
    protected $output;
    protected $db;
    protected $session;
    public $model;
    
    

public function __construct()
{
    parent::__construct();
    $db = \Config\Database::connect();
     
    
}

    protected $DBGroup              = 'default';
    protected $table                = 'profile';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];


    function insert_users_data($data){
        $builder = $db->table('users');
        $insert_data = $this->db->table($builder)->insert($data);
        return $insert_data;
        
    }



    public function insert_data($data)
{
    $data['created_at']=date('m/d/y');
    $data['updated_at']=date('m/d/y');
    $record = $this->db->table($this->table)->insert($data);
    return $record;

    }

    function getDataById($key,$id, $table){

        $query = $this->db->table($table)->where($key,$id)->get();
        $results = $query->getResult();
        return $results;

    } 

    function update_records($data){
        $table->where('id', 1);
        $table->update($data);
    }

    function insert_coin($coin){
        $coin_res = $this->db->table($table)->insert($coin)->where('coin',$coin);
        return $coin_res;
    }

    function fetch_role_id(){
        $builder = $db->table('role');
        $query   = $builder->get();  
        return $query;
        
    }    

    function insert_create_user($data){
        // $builder = $table('users');
        $data['created_at']=date('m/d/y');
        $data['updated_at']=date('m/d/y');
           
        $record = $this->db->table('users')->insert($data);
        return $record;
    }


    function user_login($data){
        
        $db = \Config\Database::connect();
        $query   = $db->table('users');
        $email = $data['email'];
        $password = $data['password'];
        $query = $this->db->table('users')->where('email',$email,'password',$password)->get();
        $results = $query->getResult();
        return $results;
    }  
    
    

     function getAllusers(){
        $builder = $this->db->table('users');
        $query   = $builder->get()->getResult(); 
        return $query;
     }


     function getAllprofile(){
        $builder = $this->db->table('profile');
        $query = $builder->get()->getResult();
        //print_r($query);die;
        return $query;


     }

    function getUsersById($id){
       $db = \Config\Database::connect();
        $query   = $db->table('profile');
        $data = $this->db->table('profile')->where('user_id',$id)->get();
        $results = $data->getResult();
        //print_r($results);die;
        return $results;

    }



    
} 


    







 