<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin');
});

Route::get('/dashboard', function () {
    return 'Admin dashboard sulla pagina routes/admin.php';
});
