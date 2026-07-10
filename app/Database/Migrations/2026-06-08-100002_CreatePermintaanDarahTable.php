<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePermintaanDarahTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_permintaan' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'nama_pasien' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'no_rm' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'ruangan' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'diagnosis' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'golongan_darah' => [
                'type'       => 'VARCHAR',
                'constraint' => 5,
            ],
            'rhesus' => [
                'type'       => 'VARCHAR',
                'constraint' => 5,
            ],
            'jumlah_kantong' => [
                'type' => 'INT',
            ],
            'prioritas' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'default'    => 'Baru',
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

        $this->forge->addKey('id_permintaan', true);
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('permintaan_darah');
    }

    public function down()
    {
        $this->forge->dropTable('permintaan_darah');
    }
}