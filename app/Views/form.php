<h1>Form Tambah</h1>
<form action="/home/tambah">
    <label>Nama</label>
    <!-- <input type="text" name="namaa"><br> name inputnya salah dicontrollernya itu nama bukan namaa  -->
    <!-- <input type="text" name="nama"><br> -->
    <input type="text" name="nama" required><br> <!-- tambahan lebih baik tambahkan required agar form tidak boleh kosong -->
    <label>Email</label>
    <input type="text" name="email" required><br>
    <!-- <button>Kirim</button> menambahkan type submit -->
    <button type="submit"> Kirim</button>
</form>
