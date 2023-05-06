<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;
use App\Models\Employee_details;
use App\Http\Controllers\Employee;
use App\Http\Middleware\chekUserlogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return view('user');
// });





Route::get('/', [employee::class, 'login']);
Route::post('/login_post', [employee::class, 'login_success']);
Route::get('/logout', [employee::class, 'logout_session']);

Route::middleware([chekUserlogin::class])->group(function(){
Route::get('/user_register', [employee::class, 'index']);
Route::post('/user_register', [employee::class, 'store']);

Route::get('/user_view',[employee::class, 'view']);

Route::get('/delete/{id}', [employee::class, 'delete'])->name('employee.delete');

Route::get('/edit/{id}', [employee::class, 'edit'])->name('employee.edit');
Route::post('/update/{id}', [employee::class, 'update_data'])->name('employee.update');



Route::get('/employee', function(){
    $cc = Employee_details::all();
    echo "<pre>";
    print_r($cc->toArray());
    echo "</pre>";
});

});