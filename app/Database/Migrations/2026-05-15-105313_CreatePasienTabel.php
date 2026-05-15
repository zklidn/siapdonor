<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasienTabel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pasien' => [
                'type'  => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_permintaan' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'nama' => [
                'type'=> 'VARCHAR',
                'constraint'=> 100,
            ],
            'umur'=> [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'diagnosa' => [
                'type' => 'VARCHAR',
                'constraint'=> 255,
            ],
            'golongan darah' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'created_at'=> [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_pasien', true);
        $this->forge->addForeignKey('id_permintaan', 'permintaan_darah', 'id_permintaan', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pasien');
    }

    public function down()
    {
        $this->forge->dropTable('pasien');
    }
}
