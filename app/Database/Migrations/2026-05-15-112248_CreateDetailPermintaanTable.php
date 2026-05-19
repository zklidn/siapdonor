<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailPermintaanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_permintaan' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'jenis_darah' => [
                'type' => 'VARCHAR',
                'constraint'=> 50,
            ],
            'jumlah' => [
                'type' => 'INT',
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
        $this->forge->addKey('id_detail', true);
        $this->forge->addForeignKey('id_permintaan', 'permintaan_darah', 'id_permintaan', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->forge->dropTable('detail_permintaan');
    }
}