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
            'id_permintaan' => [ // Relasi ke tabel permintaan_darah
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'jenis_darah' => [
                'type'       => 'VARCHAR',
                'constraint' => 50, // Misal: Whole Blood, Packed Red Cell
            ],
            'jumlah_kantong' => [
                'type' => 'INT',
            ],
            'prioritas' => [
                'type'       => 'ENUM',
                'constraint' => ['Urgent', 'Tinggi', 'Normal', 'Rendah'],
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
        
        // Relasi Foreign Key ke tabel Permintaan Darah
        $this->forge->addForeignKey('id_permintaan', 'permintaan_darah', 'id_permintaan', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('detail_permintaan');
    }

    public function down()
    {
        $this->forge->dropTable('detail_permintaan');
    }
}