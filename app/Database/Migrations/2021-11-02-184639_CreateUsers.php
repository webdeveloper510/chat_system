<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
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
			'name'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 128,
				
			],
			'email'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				
			],

            'role'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				
			],

			'password'          => [
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

		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}  

