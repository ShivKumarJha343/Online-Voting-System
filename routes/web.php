<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\ovsController;
use App\Http\Controllers\electionController;
use App\Http\Controllers\Relation;

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

Route::get('/', function () {
    return view('welcome');
});

//Admin login Routes

Route::get('/admin/login',[AdminloginController::class,'login'])->name('admin.login');
Route::post('/admin/login/submit',[AdminloginController::class,'submit'])->name('admin.submit');
Route::post('/admin/logout',[AdminloginController::class,'adminLogouts'])->name('admin.logout');


//table
Route::get('/admindashboard',[AdminloginController::class,'dashboard'])->name('admin.dashboard');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/catogory',[Relation::class,'catogories'])->name('catogory.show');

// ovsController
//candidate Tables

Route::get('/candidates',[ovsController::class,'index'])->name('candidate.index');

Route::get('/candidate_create',[ovsController::class,'create'])->name('candidate.create');
Route::POST('/candidate_submit',[ovsController::class,'candidate_submit'])->name('candidate.submit');
Route::get('edit_candidate/{id}',[ovsController::class,'edit'])->name('candidate.edit');
Route::post('update_candidate/{id}',[ovsController::class,'candidate_update'])->name('candidates.update');
Route::get('delete_candidate/{id}',[ovsController::class,'delete'])->name('candidates.delete');

// Route::get('edit_book/{id}',[ControllerBook::class,'edit'])->name('books.edit');
// Route::post('update_book/{id}',[ControllerBook::class,'update'])->name('book.update');
// Route::get('delete_book/{id}',[ControllerBook::class,'delete'])->name('books.delete');


//Election Schedule Tables

Route::get('/elections',[ovsController::class,'election'])->name('election.index');
Route::get('/election_create',[ovsController::class,'election_create'])->name('election.create');
Route::post('/election_submit',[ovsController::class,'election_submit'])->name('election.submit');
Route::get('edit_election/{id}',[ovsController::class,'electionschedule_edit'])->name('election.edit');
Route::post('update_election/{id}',[ovsController::class,'electionschedule_update'])->name('election.update');

Route::get('delete_election/{id}',[ovsController::class,'electionschedule_delete'])->name('election.delete');


// Frontend Routes

Route::get('/election_shedule',[ovsController::class,'Schedule'])->name('election.schedule');
