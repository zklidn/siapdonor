<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonorTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_donor' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'golongan_darah' => [
                'type'       => 'VARCHAR',
                'constraint' => 5,
            ],
            'rhesus' => [
                'type'       => 'VARCHAR',
                'constraint' => 5,
            ],
            'kota' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_donor', true);
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('donor');
    }

    public function down()
    {
        $this->forge->dropTable('donor');
    }
}