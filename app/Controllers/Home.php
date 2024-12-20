<?php

namespace App\Controllers;

use App\Models\Customer\ProductModel;
use App\Models\Customer\OrderModel;

class Home extends BaseController {
    public function index() {
        echo view('home');
    }
}
