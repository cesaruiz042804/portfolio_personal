<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [PagesController::class, 'call_home'])->name('home');
Route::get('/projects', [PagesController::class, 'call_projects'])->name('projects');
Route::get('/contact', [PagesController::class, 'call_contact'])->name('contact');
Route::post('/contact/data', [PagesController::class, 'call_form_contact'])->name('data_contact');
Route::get('/about', [PagesController::class, 'call_about'])->name('about');
Route::get('/example', [PagesController::class, 'call_example'])->name('example');


# php -S localhost:8000 -t public
# php -S 192.168.0.11:8000 -t public

# git add .
# git commit -m "Escribir"
# git push origin main o master

# composer create-project --prefer-dist laravel/laravel nombre-de-tu-proyecto

# Comandos artisan
# php artisan migrate:reset
# php artisan make:seeder UsersTableSeeder
# php artisan db:seed --class=UsersTableSeeder      Uno solo
# php artisan db:seed     Todos
# php artisan migrate:refresh --seed
# php artisan make:controller UsersController
# php artisan make:model User
# php artisan make:migration UsersTable
# php artisan migrate:refresh
