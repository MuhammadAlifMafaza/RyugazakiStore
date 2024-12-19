<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['username', 'password', 'nama_lengkap', 'email'];
    protected $useTimestamps = false;

    /*
    ** untuk ambil data
    **/

    public function getData($parameter){
        $builder = $this->table($this->table);
        $builder->where('username=', $parameter);
        $builder->orwhere('email=', $parameter);
        $query = $builder->get();
        return $query->getRowArray();        
    }
    
    /* untuk simpan / update data */
    public function updateData($data){
        $builder = $this->table($this->table);
        if ($builder->save($data)){
            return true;
        } else {
            return false;
        }
    }

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
