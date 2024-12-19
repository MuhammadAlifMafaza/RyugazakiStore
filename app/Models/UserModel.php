<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['username', 'password', 'nama_lengkap', 'email'];
    protected $useTimestamps = false;

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
