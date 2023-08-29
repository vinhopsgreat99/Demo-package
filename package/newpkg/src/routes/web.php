<?php 

use Illuminate\Support\Facades\Route;

use Vinh\Newpkg\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'home']);

?>