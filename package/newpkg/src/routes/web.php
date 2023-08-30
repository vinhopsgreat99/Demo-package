<?php 

use Illuminate\Support\Facades\Route;

use Vinh\Newpkg\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'home']);

Route::get('/view_category', [AdminController::class, 'view_category']);

//Route for adding category to the website
Route::post('/add_category', [AdminController::class, 'add_category']);

//Route for deleting the category
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

//Route for showing the page for admin add the products
Route::get('/view_product', [AdminController::class, 'view_product']);

//Route not showing directly, when submit, the product will store in database
Route::post('/add_product', [AdminController::class, 'add_product']);

//Route for showing all products, can delete or edit the infomations of the products
Route::get('/show_product', [AdminController::class, 'show_product']);

//Route not showing directly, when press delete button, the product will remove from database
Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

//Route for showing the page for changing the informations of the products
Route::get('/update_product/{id}', [AdminController::class, 'update_product']);

//Route not showing directly, when pressing edit button, the new informations that are changed will store in database
Route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);

Route::get('/order', [AdminController::class, 'order']);

Route::get('/delivered/{id}', [AdminController::class, 'delivered']);

Route::get('/search', [AdminController::class, 'searchdata']);



?>