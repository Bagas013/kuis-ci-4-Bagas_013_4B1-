<?php

namespace App\Models;

use Codeigniter\Model;

class Usermodel extends Model
{
    // protected $table = 'userss'; ini users nya tidak sesuai karena double, harus nya user karena tabel nya user//
    protected $table = 'users'; 
    protected $allowedFields = ['name', 'email', 'created_at'];
}
