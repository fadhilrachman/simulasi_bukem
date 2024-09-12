<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TransactionController;
use App\Models\News;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Route;

////////////////////////////////////////////////
/////////////////////////// USER
////////////////////////////////////////////////

Route::get('/', function () {
    $data = News::get();
    return view('cuy',["data"=>$data]);
});

Route::get('/news/{id}', function ($id) {
    $data = News::find($id);
    return view('detail-news',["data"=>$data]);
});


///// AUTH
Route::get('/register', function () {
    return view('register',["name"=>"padilsss"]);
});
Route::post('/register', [Auth::class,'Register']);
Route::get('/login', function () {
    return view('login',["name"=>"padilsss"]);
})->name('login');
Route::post('/login', [Auth::class,'Login']);
Route::post('/logout', function () {
    FacadesAuth::logout(); // Melakukan logout user yang sedang login
    return redirect('/'); // Mengarahkan user kembali ke halaman utama atau halaman lain
})->name('logout');

///. TRANSACTION
Route::get('/payment-ticket', function () {
    return view('payment-ticket',["name"=>"padilsss"]);
})->middleware('auth');
// Route::get('/checkout-ticket/{id}',[TransactionController::class,'getTicketById'])->name('checkout-ticket')->middleware('auth');
Route::get('/transaction/checkout/{id}',[TransactionController::class,'getTicketById'])->name('checkout-ticket')->middleware('auth');
Route::get('/transaction/success/{id}',[TransactionController::class,'transactionSuccess'])->name('success.transaction')->middleware('auth');
Route::post('/transaction/process',[TransactionController::class,'buyTicket'])->name('proccess.transaction')->middleware('auth');

/////// HISTORY TRANSACTION
Route::get('/transaction',[TransactionController::class,'getListTransaction'])->middleware('auth');

/////// HISTORY VISIT
Route::get('/visit',[TicketController::class,'getListVisit'])->middleware('auth')->name('visit');
Route::get('/qrcode/{id}',[TicketController::class,'getQrcode'])->middleware('auth');
Route::get('/unduh-tiket/{id}', [TicketController::class, 'downloadTicket'])->name('download.ticket');




////////////////////////////////////////////////
/////////////////////////// DASHBOARD
////////////////////////////////////////////////

/////// ADMIN
Route::get('/dashboard/admin', [AdminController::class,'get'])->name('dashboard.admin');
Route::post('/dashboard/admin', [AdminController::class,'createAdmin'])->name('createAdmin');
Route::get('/dashboard/admin-create', [AdminController::class,'pageCreateAdmin']);

/////// NEWS
Route::get('/dashboard/news', [NewsController::class,'pageGetNews'])->name('news');
Route::get('/dashboard/news/{id}', [NewsController::class,'updateNewsPage']);
Route::get('/dashboard/news-create', [NewsController::class,'pageCreateNews']);
Route::post( '/dashboard/news-create/submit', [NewsController::class,'createNews'])->name('news.createNews');

/////// TRANSACTION
Route::get('/dashboard/transaction', [TransactionController::class,'getListTransactionAdmin'])->middleware('auth')->name('dashboard.transaction');

/////// VISIT
Route::get('/dashboard/visit', [TicketController::class,'getListVisitAdmin'])->middleware('auth')->name('dashboard.visit');


Route::get('/scan', function () {
    return view('dashboard.scan-qr',["name"=>"padilsss"]);
});
Route::post('/scan',[TicketController::class,'scanQr'])->name('scan');

