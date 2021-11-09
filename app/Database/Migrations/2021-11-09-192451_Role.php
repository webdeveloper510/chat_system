<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Role extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
                
            ],

            
            'type'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                
            ],

           

            ]);

         $this->forge->addPrimaryKey('id');
         $this->forge->createTable('role');      
                
        }
    

        public function down()
        {
        $this->forge->dropTable('role');
        }
    }
