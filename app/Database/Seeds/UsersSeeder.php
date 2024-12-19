<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username'      => 'ZhuxydRyugazaki',
            'password'      => password_hash('qwerty', PASSWORD_DEFAULT),
            'email'         => 'muhammadalifmafaza@gmail.com',
            'nama_lengkap'  => 'Muhammad Alif Mafaza',
            'token'         => 'Ryuzaki',
        ];

        // Simple Queries
        

        // Using Query Builder
        $this->db->table('user')->insert($data);
    }
}
