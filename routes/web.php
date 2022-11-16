<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\ControllerAbsence;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('ajout', [RegisteredUserController::class, 'create'])
->name('ajout');
Route::post('ajout', [RegisteredUserController::class, 'store']);
//------------//
Route::middleware('auth','roleAdmin')->group(function () {
    Route::get('dash', [MyController::class,'index'])->name('dash');
    Route::delete('supression , {employe}', [MyController::class,'delete'])->name('supression');
    Route::put('update, {employe}', [MyController::class,'update'])->name('update');
    Route::get('modifierUtilisateur, {employe}', [MyController::class,'edit'])->name('modifierUser');            
});
Route::middleware('auth','roleRh')->group(function (){
    Route::get('/dashbordRh', function () {
        return view('dashbordRh');
    });
   
 });


    Route::middleware('auth','roleUser')->group(function (){

    Route::get('dashbordEmploye', function () {
      return view('dashbordEmploye');}); 
      
      Route::get('/absence', function () {
        return view('absence');
      
    });
    Route::get('absence', [ControllerAbsence::class, 'create'])
        ->name('absence');
    Route::post('absence', [ControllerAbsence::class, 'store']);
    Route::get('dashbordEmploye',[ControllerAbsence::class, 'index']);

    });
//});


Route::middleware('auth','roleDage:dage')->group(function (){
    Route::get('dashbordDage', [MyController::class,'indexDage'])->name('dashbord');
 });


//Route::get('/register', function () {
 //   return view('register');
//});
//Route::get('register', [RegisteredUserController::class, 'create'])
//->name('register');
//Route::get('/', [AuthenticatedSessionController::class, 'create']);
Route::get('/', function () {
    return view('auth.login');});




/*Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
require __DIR__.'/auth.php';
