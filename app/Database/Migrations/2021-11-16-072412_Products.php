<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'product_category' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'product_price' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'product_remark' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at'    => [
                'type'      => 'DATETIME',
                'null'      => true,

            ],
            'update_at'       => [
                'type'      => 'DATETIME',
                'null'      => true,

            ]
        ]);

        $this->forge->addKey('product_id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
