<?php

namespace App\Models\Customer;

use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'price', 'stock', 'image'];
}
