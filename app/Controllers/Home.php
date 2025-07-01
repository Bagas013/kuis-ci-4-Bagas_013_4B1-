<?php

namespace App\Controllers;

use App\Models\Usermodel;

class Home extends BaseController
{
    public function index()
    {
        $model = new Usermodel();
        $data['users'] = $model->getall();
        // return view('user', $data) disini tidak ada penutup/ titik koma di akhir baris //
        return view('user', $data);
    }

    public function tambah()
    {
        if($this->request->getMethod() === 'POST'){
            // $userModel = new usermodel; ini harusnya u nya kapital Usermodel, karena di models itu Usermodel.php
            $userModel = new Usermodel; 

            $userModel->insert([
                'name' => $this->request->getPost('nama'),
                // 'email' => $this->request->getVar('email'), ini tidak konsisten harusnya getPost saja //
                'email' => $this->request->getPost('email'),
                'created_at' => date('Y-m-d')
            ]);
            return redirect()->to('/');
        }
        echo view('form');
    }
}
