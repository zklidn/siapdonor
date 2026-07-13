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
            'id_user' => [ // Relasi ke tabel users (Rumah Sakit)
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'id_pasien' => [ // Relasi ke tabel pasien
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'ruangan' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'diagnosis' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['Diproses', 'Donor Ditemukan', 'Selesai', 'Dibatalkan'],
                'default'    => 'Diproses',
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
        
        // Relasi Foreign Key
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_pasien', 'pasien', 'id_pasien', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('permintaan_darah');
    }

    public function down()
    {
        $this->forge->dropTable('permintaan_darah');
    }
}