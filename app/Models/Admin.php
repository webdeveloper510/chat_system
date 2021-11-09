<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model
{
    private $db;

public function __construct()
{
    parent::__construct();
    $this->db = \Config\Database::connect();
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
        $insert_data = $this->db->table($this->table)->insert($data);
        return $insert_data;
        
    }



    public function insert_data($data)
{
     
    $record = $this->db->table($this->table)->insert($data);
    return $record;

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
        $query   = $builder->get();  // Produces: SELECT * FROM mytable
        return $query;
        
    }    

}
    







 