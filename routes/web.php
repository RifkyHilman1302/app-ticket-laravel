<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;


//Users Routes
//users Login Routes
Route::get('/', [userController::class, 'userLogin'])->name('user.login');
Route::post('/user/login/submit', [userController::class, 'userLoginSubmit'])->name('user.loginSubmit');
//users Login Routes

//users regis Routes
Route::get('/user/register', [userController::class, 'regisUser'])->name('user.regis');
Route::post('/user/regis/submit', [userController::class, 'regisSubmit'])->name('user.regisSubmit');
//users regis Routes

//users pages
Route::get('/dashboard', [userController::class, 'userpages']) -> name('user.pages');
Route::get('/profile', [userController::class, 'profilUser']) -> name('user.profil');
//users pages

//Users Concert
Route::get('/concert', [userController::class, 'Concert']) -> name('user.concert');
//Users Concert

Route::get('/Ticket', [userController::class, 'Ticket']) -> name('user.TicketPages');
Route::get('/Tickets/{concerts_title}', [userController::class, 'buyTicket']) -> name('user.Ticket');
Route::post('/Ticket/Submit', [userController::class, 'buyTicketSubmit'])->name('user.TicketSubmit');

//Users Transactions
Route::get('/Transaction', [userController::class, 'transaction']) -> name('user.Transaction');
//Users Transactions

//Users Routes


//Admin Routes
//admin Login Routes
Route::get('/login/admin', [adminController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/login/submit', [adminController::class, 'adminLoginSubmit'])->name('admin.loginSubmit');
//admin Login Routes


//admin pages
Route::get('/admin', [adminController::class, 'adminpages']) -> name('admin.pages');
Route::get('/admin/MasterData', [adminController::class, 'MasterData']) -> name('admin.MasterData');
//admin pages

//Master Data Routes
Route::get('/admin/MasterData/Tambah', [adminController::class, 'tambahUser']) -> name('admin.MasterDataTambah');
Route::get('/admin/MasterData/Update/{id}', [adminController::class, 'updateUser']) -> name('admin.MasterDataUpdate');

Route::post('/admin/MasterData/Update/Submit/{id}', [adminController::class, 'updateUserSubmit']) -> name('admin.MasterDataUpdateSubmit');
Route::post('/admin/MasterData/Tambah/Submit', [adminController::class, 'tambahUserSubmit']) -> name('admin.MasterDataSubmit');
Route::post('/admin/MasterData/Delete/{id}', [adminController::class, 'deleteUser']) -> name('admin.MasterDataDelete');
//Master Data Routes

//Concerts Routes 
Route::get('/admin/Concerts', [adminController::class, 'Concerts']) -> name('admin.Concerts');
Route::get('/admin/Concerts/Tambah', [adminController::class, 'AddConcerts']) -> name('admin.ConcertsTambah');
Route::get('/admin/Concerts/Update/{id}', [adminController::class, 'updateConcerts']) -> name('admin.ConcertsUpdate');

Route::post('/admin/Concerts/Tambah/Submit', [adminController::class, 'AddConcertsSubmit']) -> name('admin.ConcertsTambahSubmit');
Route::post('/admin/Concerts/Update/Submit/{id}', [adminController::class, 'updateConcertsSubmit']) -> name('admin.ConcertsUpdateSubmit'); 
Route::post('/admin/Concerts/Delete/{id}', [adminController::class, 'DeleteConcerts']) -> name('admin.ConcertsDelete');
//Concerts Routes

//Ticket routes
Route::get('/admin/Ticket/Tambah/{id}', [adminController::class, 'addTicket']) -> name('admin.TicketTambah');
Route::get('/admin/Ticket', [adminController::class, 'Ticket']) -> name('admin.Ticket');
Route::get('/admin/Ticket/Update/{id}', [adminController::class, 'TicketUpdate']) -> name('admin.TicketUpdate');

Route::post('/admin/Ticket/Tambah/submit', [adminController::class, 'addTicketSubmit']) -> name('admin.TicketTambahSubmit');
Route::post('/admin/Ticket/Update/submit/{id}', [adminController::class, 'TicketUpdateSubmit']) -> name('admin.TicketUpdateSubmit'); 
Route::post('/admin/Ticket/Delete/{id}', [adminController::class, 'DeleteTicket']) -> name('admin.DeleteTicket'); 
//Ticket routes

//Seats routes
Route::get('/admin/Seats/Tambah/{id}', [adminController::class, 'addSeats']) -> name('admin.SeatsTambah');
Route::get('/admin/Seats', [adminController::class, 'Seats']) -> name('admin.Seats');
Route::get('/admin/Seats/Update/{id}', [adminController::class, 'updateSeats']) -> name('admin.SeatsUpdate');

Route::post('/admin/Seats/Update/submit/{id}', [adminController::class, 'updateSeatsSubmit']) -> name('admin.SeatsUpdateSubmit'); 
Route::post('/admin/Seats/Tambah/submit', [adminController::class, 'addSeatsSubmit']) -> name('admin.SeatsTambahSubmit');
Route::post('/admin/Seats/Delete/{id}', [adminController::class, 'DeleteSeats']) -> name('admin.DeleteSeats'); 
//Seats routes

//Transactions routes
Route::get('/admin/Transaction', [adminController::class, 'Transaction']) -> name('admin.Transaction');

//Transactions routes

//Admin Routes



