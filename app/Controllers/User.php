<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        return view('login/v_login.php');
    }

    public function autentikasi()
    {
        $userModel = new \App\Models\UserModel();

        // Ambil input dari form
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan email
        $user = $userModel->getUserByEmail($email);

        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Simpan data ke session
                session()->set([
                    'isLoggedIn' => true,
                    'userId'     => $user['id'],
                    'userName'   => $user['nama_lengkap'],
                ]);

                return redirect()->to('/dashboard'); // Arahkan ke halaman dashboard
            } else {
                return redirect()->back()->with('error', 'Password salah.');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak ditemukan.');
        }
    }
}
