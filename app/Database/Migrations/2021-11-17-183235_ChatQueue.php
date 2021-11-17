<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ChatQueue extends Migration
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
			'Chat_user'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 128,
				
			],
			'fake_profile'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				
			],

            'last_message'          => [
				'type'           => 'DATETIME',
				'null'     		 => true,
				'default'    	 => null,
				
			],

			'type'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],

            'open_chat'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],

            'push_back'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],

            'asign_to'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],

            'moderator'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],

            'live_message'          => [
				'type'           => 'INT',
				'constraint'     => 5,
			],


            'reminder_message'          => [
				'type'           => 'INT',
				'constraint'     => 5,
			],


            'message_today'          => [
				'type'           => 'INT',
				'constraint'     => 5,
			],

            'online_members'          => [
				'type'           => 'INT',
				'constraint'     => 5,
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

		$this->forge->createTable('chat_queue');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('chat_queue');
	}
}  
