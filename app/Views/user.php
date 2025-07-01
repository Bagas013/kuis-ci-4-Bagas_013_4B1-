<h1>Data User</h1>
<ul>
<?php 
//foreach($user as $u):   dicontroller itu menggunakan users bukan user
 foreach($users as $u): 
 
 ?>
    <li><?= $u['nama'] ?> - <?= $u['email'] ?></li>
<?php endforeach; ?>
</ul>
