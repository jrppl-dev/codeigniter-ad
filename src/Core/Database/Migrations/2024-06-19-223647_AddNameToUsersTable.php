<?php

namespace Core\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNameToUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => false,
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'name');
    }
}
