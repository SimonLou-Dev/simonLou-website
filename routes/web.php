<?php
/*
 * Copyright (c) 2020. Simon Lou - Web developer, designer &  integrator
 * https://www.simon-lou.com
 */

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'main'])->name('index');
Route::post('/post', [\App\Http\Controllers\MainController::class, 'contact'])->name('contact');


// Auth & Auth Verify Routes
Route::get('/logout', function (){
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');
Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/verify', function (){return view('auth.verify');});

// Client Route
Route::get('/client', function (){return view('client.index');})->name('client.index')->middleware('client');
Route::get('/client/project/1', function (){return view('client.project');})->name('client.project');
Route::get('/client/project/1/tickets', function (){return view('client.tickets.index');})->name('client.tickets');
Route::get('/client/project/1/ticket/create',function (){return view('client.tickets.create');})->name('client.ticket.create');
Route::get('/client/project/1/ticket/1/chat', function (){return view('client.tickets.chat');})->name('client.ticket.chat');

// Admin Route
Route::get('/admin', function (){return view('admin.index');})->name('admin.index')->middleware('admin');
    //Admin - project
Route::get('/admin/projects', [\App\Http\Controllers\ProjectController::class, 'index'])->name('admin.project.all');
Route::get('/admin/project/{id}/view', [\App\Http\Controllers\ProjectController::class, 'show'])->name('admin.project');
Route::get('/admin/project/{id}/modify', [\App\Http\Controllers\ProjectController::class, 'edit'])->name('admin.project.modify');
Route::put('/admin/project/{id}/modify/post', [\App\Http\Controllers\ProjectController::class, 'update'])->name('admin.project.modify.post');
Route::post('/admin/project/{id}/add_cardboard', [\App\Http\Controllers\ProjectController::class, 'add_cardboard'])->name('admin.project.add_cardboard');
Route::get('/admin/project/{id}/board', [\App\Http\Controllers\ProjectController::class, 'show_board'])->name('admin.project.board');
Route::get('/admin/project/boardcard/{id}/setpriority/{priority}', [\App\Http\Controllers\ProjectController::class, 'card_setpriority'])->name('admin.project.board.card_setpriority');
Route::get('/admin/project/boardcard/{id}/setspace/{space}', [\App\Http\Controllers\ProjectController::class, 'card_setspace'])->name('admin.project.board.card_setspace');
Route::get('/admin/project/boardcard/{id}/setcategory/{category}', [\App\Http\Controllers\ProjectController::class, 'card_setcategory'])->name('admin.project.board.card_setcategory');
Route::get('/admin/project/create', [\App\Http\Controllers\ProjectController::class, 'create'])->name('admin.project.create');
Route::post('/admin/project/store', [\App\Http\Controllers\ProjectController::class, 'store'])->name('admin.project.store');
Route::get('/admin/project/{id}/update/create', [\App\Http\Controllers\ProjectController::class, 'add_update'])->name('admin.project.update.create');
Route::post('/admin/project/{id}/update/post', [\App\Http\Controllers\ProjectController::class, 'post_update'])->name('admin.project.update.post');
Route::get('/admin/project/update/{updateid}/publish', [\App\Http\Controllers\ProjectController::class, 'publish_update'])->name('admin.project.update.publish');

Route::get('/stresstest', [\App\Http\Controllers\ProjectController::class, 'emailstresstest']);

Route::get('/mail', function (){return view('mail.createproject');});


// Admin - mail
/*
Route::get('/admin/mail', function (){return view('admin.mail.index');})->name('admin.mail');
Route::get('/admin/mail/read/4', function (){return view('admin.mail.read');})->name('admin.mail.read');
Route::get('/admin/mail/create', function (){return view('admin.mail.create');})->name('admin.mail.create');
Route::get('/admin/mail/reply/5', function (){return view('admin.mail.reply');})->name('admin.mail.reply');
   */ //Admin - tickets
Route::get('/admin/tickets', function (){return view('admin.tickets.index');})->name('admin.tickets');
Route::get('/admin/ticket/5/reply', function (){return view('admin.tickets.reply');})->name('admin.tickets.reply');
    //Admin - contact
Route::get('/admin/contact', function (){return view('admin.contact.index');})->name('admin.contact');
    //Admin - management
Route::get('/admin/management/content', [\App\Http\Controllers\ContentManagerController::class, 'index'])->name('admin.management.content');
Route::post('/admin/management/content/add/lang', [\App\Http\Controllers\ContentManagerController::class, 'add_language'])->name('admin.management.content.lang.add');
Route::post('/admin/management/content/add/ticketscat', [\App\Http\Controllers\ContentManagerController::class, 'add_ticketcat'])->name('admin.management.content.ticketscat.add');
Route::post('/admin/management/content/add/status', [\App\Http\Controllers\ContentManagerController::class, 'add_projectstatus'])->name('admin.management.content.projectstatus.add');
Route::post('/admin/management/content/remove/ticketscat', [\App\Http\Controllers\ContentManagerController::class, 'delet_ticketcat'])->name('admin.management.content.ticketscat.delete');
Route::post('/admin/management/content/remove/status', [\App\Http\Controllers\ContentManagerController::class, 'delet_projectstatus'])->name('admin.management.content.projectstatus.delete');
