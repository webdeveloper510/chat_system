<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTypeColumn extends Migration
{
    
    public function __construct()
    {
      parent::__construct();
      $this->forge = \Config\Database::forge();
    }
  
    public function up()
    {
      $fields = array(
        'type' => array(
          'type' => 'VARCHAR',
          'constraint' => 100,
          'after' => 'username'
        )
      ); 
      $this->forge->addColumn('profile', $fields);
    }
  
    public function down()
    {
      
    }
  }


