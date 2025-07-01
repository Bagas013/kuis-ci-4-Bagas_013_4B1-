# Laporan Kuis CI4 Bug Fix v3

## Nama:Bagas Fais Rizki Begi
## NIM:231080200013
## Kelas:4/B1

## Bug yang Diperbaiki

1.  // protected $table = 'userss'; ini users nya tidak sesuai karena double, harus nya user karena tabel nya user//
    protected $table = 'users'; 

2.  // return view('user', $data) disini tidak ada penutup/ titik koma di akhir baris //
        return view('user', $data);

3.  // $userModel = new usermodel; ini harusnya u nya kapital Usermodel, karena di models itu Usermodel.php
        $userModel = new Usermodel; 

4. // 'email' => $this->request->getVar('email'), ini tidak konsisten harusnya getPost saja //
       'email' => $this->request->getPost('email'),

5. // protected $table = 'userss'; ini users nya tidak sesuai karena double, harus nya user karena tabel nya user//
        protected $table = 'users'; 

6. // <?php foreach($user as $u): ?> dicontroller itu menggunakan users bukan user //    
        <?php foreach($users as $u): ?>

7. // $routes->match('get', 'home/tambah', 'Home::tambah'); perbaikan
    $routes->match(['get', 'post'], 'home/tambah', 'Home::tambah');

8. // <!--   <input type="text" name="namaa"><br> name inputnya salah dicontrollernya itu nama bukan namaa  -->
    <!-- <input type="text" name="nama"><br> -->
9. // <!-- // <input type="text" name="nama" required><br> tambahan, lebih baik tambahkan required agar form tidak boleh kosong -->

10.   <!-- <button>Kirim</button> menambahkan type submit -->
    <button type="submit"> Kirim</button>
