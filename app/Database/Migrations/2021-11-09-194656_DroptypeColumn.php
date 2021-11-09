<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DroptypeColumn extends Migration
{
    public function up()
    {
        $forge = \Config\Database::forge();
        $forge->dropColumn('profile', 'type');
    }

    public function down()
    {
        //
    }
}
