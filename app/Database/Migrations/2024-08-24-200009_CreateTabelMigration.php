<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTabelMigration extends Migration
{
    public function up()
    {
        // Tabel guru
        $this->forge->addField([
            'guru_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_guru' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'nip' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'kontak' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('guru_id', true);
        $this->forge->createTable('guru');

        // Tabel jadwal
        $this->forge->addField([
            'jadwal_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kelas_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'mapel_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'guru_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'hari' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'jam_mulai' => [
                'type' => 'TIME',
                'null' => true,
            ],
            'jam_selesai' => [
                'type' => 'TIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('jadwal_id', true);
        $this->forge->addKey('kelas_id');
        $this->forge->addKey('mapel_id');
        $this->forge->addKey('guru_id');
        $this->forge->createTable('jadwal');

        // Tabel kelas
        $this->forge->addField([
            'kelas_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_kelas' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'wali_kelas' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'ruang_kelas' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('kelas_id', true);
        $this->forge->createTable('kelas');

        // Tabel mapel
        $this->forge->addField([
            'mapel_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_mapel' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'guru_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('mapel_id', true);
        $this->forge->addKey('guru_id');
        $this->forge->createTable('mapel');

        // Tabel siswa
        $this->forge->addField([
            'siswa_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_siswa' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'nisn' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'kelas_id' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'kontak' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('siswa_id', true);
        $this->forge->createTable('siswa');

        // Foreign Keys
        $this->forge->addForeignKey('kelas_id', 'kelas_id', 'kelas', 'kelas_id', 'SET NULL', 'SET NULL');
        $this->forge->addForeignKey('mapel_id', 'mapel_id', 'mapel', 'mapel_id', 'SET NULL', 'SET NULL');
        $this->forge->addForeignKey('guru_id', 'guru_id', 'guru', 'guru_id', 'SET NULL', 'SET NULL');
        $this->forge->addForeignKey('guru_id', 'guru_id', 'mapel', 'guru_id', 'SET NULL', 'SET NULL');
    }

    public function down()
    {
        $this->forge->dropTable('guru');
        $this->forge->dropTable('jadwal');
        $this->forge->dropTable('kelas');
        $this->forge->dropTable('mapel');
        $this->forge->dropTable('siswa');
    }
}
