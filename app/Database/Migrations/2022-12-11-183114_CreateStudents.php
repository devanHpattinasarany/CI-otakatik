<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudents extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_students' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_students' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'alias_students' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'telepon_students' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true,
            ],
            'email_students' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'alamat_students' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'info_students' => [
                'type'       => 'TEXT',
                'constraint' => '50',
                'null'       => true,
            ],
            'id_kelas' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATE',
                'null'       => true,
            ],
            'deleted_at' => [
                'type'       => 'DATE',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_students', true);
        $this->forge->addForeignKey('id_kelas', 'kelas', 'id_kelas');
        $this->forge->createTable('students');
    }

    public function down()
    {

        $this->forge->dropForeignKey('students', 'students_id_kelas_foreign');
        $this->forge->dropTable('students');
    }
}
