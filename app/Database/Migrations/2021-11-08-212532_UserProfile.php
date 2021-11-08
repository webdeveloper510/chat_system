<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserProfile extends Migration
{
    public function up(){
        
     $this->forge->addField([

    'id'          => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => true,
        'auto_increment' => true,
    ],
    'user_id'          => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => true,
        
    ],
    'username'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 128,
        
    ],
    'type'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
        
    ],

    'gender'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
        
    ],

    'age'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
    ],

    'country'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
    ],

    'postarea'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
    ],

    'city'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
    ],
    
    'coins'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
    ],

    'status'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
    ],
    
    'profiletext'          => [
        'type'           => 'TEXT',
        'null'           => true,
    ],

    'name'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
    ],

    'residence'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
    ],

    'profession'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
    ],

    'family'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
    ],

    'hobbies'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 255,
    ],

    'created_at'          => [
        'type'           => 'DATETIME',
        'null'     		 => true,
        'default'    	 => null,
    ],
    'updated_at'          => [
        'type'           => 'DATETIME',
        'null'     		 => true,
        'default'    	 => null,
    ],


]);

$this->forge->addPrimaryKey('id');

$this->forge->createTable('profile');
}

public function down()
{
$this->forge->dropTable('profile');
}
}
   