<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailPermintaanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_permintaan' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'tanggal' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'nama_pasien' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'golongan_darah' => [
                'type'       => 'VARCHAR',
                'constraint' => 5,
                'null'       => true,
            ],
            'jenis_darah' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'jumlah_kantong' => [
                'type' => 'INT',
            ],
            'prioritas' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => true,
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
        
        $this->forge->addKey('id_detail', true);
        $this->forge->addForeignKey('id_permintaan', 'permintaan_darah', 'id_permintaan', 'CASCADE', 'CASCADE');
        $this->forge->createTable('detail_permintaan'); 
    }

    public function down()
    {
        $this->forge->dropTable('detail_permintaan');
    }
}