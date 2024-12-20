<?php

namespace App\Models\Customer;

use CodeIgniter\Model;


class OrderModel extends Model {
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'total_price', 'status', 'created_at'];
}