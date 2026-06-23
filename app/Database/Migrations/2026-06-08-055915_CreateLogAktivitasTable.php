<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLogAktivitasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'aktivitas'  => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'keterangan' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        
      
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'SET NULL');
        
        $this->forge->createTable('log_aktivitas');
    }

    public function down()
    {
 
        $this->forge->dropForeignKey('log_aktivitas', 'log_aktivitas_id_user_foreign');
        $this->forge->dropTable('log_aktivitas');
    }
}