<?php

// $routes->get('/', 'Main::index'); ini bisa dihapus karena ga ada controller main
// $routes->match('get', 'home/tambah', 'Home::tambah'); perbaikan
$routes->match(['get', 'post'], 'home/tambah', 'Home::tambah');
