<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\InsitutionsController;
use App\Http\Controllers\Course;
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

Route::get('/apps', function () {
    return view('apps');
});

#---------->GROUPING ROUTES<----------#
Route::prefix('/mahasiswa')->group(function (){
    
    Route::get('/nama/{nama}', function ($nama) {
        return "Nama Mahasiswa : $nama";
    });
    
    Route::get('/umur/{umur}', function ($nama) {
        return "Umur Mahasiswa : $nama";
    });
    
    Route::get('/alamat/{alamat}', function ($nama) {
        return "Alamat Mahasiswa : $nama";
    });
});
#---------->GROUPING ROUTES<----------#


#---------->ROUTE TO CONTROLER<----------#
Route::get('test/(id)', [Test::class, 'index']);
#---------->ROUTE TO CONTROLER<----------#

#---------->ROUTE TO view<----------#
Route::get('/views-app', function () {
    return view('app');
});
#---------->ROUTE TO view<----------#

#---------->ROUTE Course<----------#

Route::get('course', [Course::class, 'index']); 

#---------->ROUTE Course<----------#

#Route::get('institutions', [InsitutionsController::class, 'index'])->name(institutions.index); 

#________________CATATAN SALAMA MATERI____________________#
#grouping route
#Route::prefix('/mahasiswa')->group(function (){
    
    #});
    
    #grouping route
    
    #php artisan route list (menampilkan routing)
    #________________CATATAN SALAMA MATERI____________________#