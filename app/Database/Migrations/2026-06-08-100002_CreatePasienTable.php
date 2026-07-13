<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasienTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pasien' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'no_rm' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'nama_pasien' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'golongan_darah' => [
                'type'       => 'VARCHAR',
                'constraint' => 5,
            ],
            'rhesus' => [
                'type'       => 'ENUM',
                'constraint' => ['+', '-'],
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_pasien', true);
        $this->forge->createTable('pasien');
    }

    public function down()
    {
        $this->forge->dropTable('pasien');
    }
}