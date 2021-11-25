<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Connection extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE,
			],

            'resource_id'          => [
				'type'           => 'INT',
				
			],

            'user_id'          => [
				'type'           => 'INT',

			],

			'name'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
				
            ]

		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('Connection');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('Connection');
	}
}  