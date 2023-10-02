<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_user' => 'Administrator',
            'email_user' => '123@gmail.com',
            'password_user' => password_hash('123', PASSWORD_BCRYPT),
        ];
        $this->db->table('users')->insert($data);
    }
}
