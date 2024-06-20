<?php

namespace Core\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateArticleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
           'id' => [
               'type' => 'INT',
               'null' => false,
               'auto_increment' => true,
           ],
            'title' =>[
                'type' => 'VARCHAR',
                'constraint' => '128',
                'null' => false,
            ],
            'content' => [
                'type' => 'TEXT',
                'null' => true,
            ]
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('articles');
    }

    public function down()
    {
        $this->forge->dropTable('articles');
    }
}
