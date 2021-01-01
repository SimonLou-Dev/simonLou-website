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
Route::get('/client', [\App\Http\Controllers\Client\ClientController::class, 'index'])->name('client.index')->middleware('client');
Route::get('/client/project/{id}', [\App\Http\Controllers\Client\ClientController::class, 'show'])->name('client.project');
Route::get('/client/tickets', [\App\Http\Controllers\Client\ClientTicketsController::class, 'index'])->name('client.tickets');
Route::get('/client/project/{project_id}/ticket/create', [\App\Http\Controllers\Client\ClientTicketsController::class, 'create'])->name('client.ticket.create');
Route::post('/client/project/{project_id}/ticket/post', [\App\Http\Controllers\Client\ClientTicketsController::class, 'store'])->name('client.ticket.add');
Route::get('/client/chat/ticket/{id}', [\App\Http\Controllers\Client\ClientTicketsController::class, 'show'])->name('client.ticket.chat');
Route::post('/client/chat/post/{id}', [\App\Http\Controllers\Client\ClientTicketsController::class, 'add_message'])->name('client.ticket.post');

// Admin Route
Route::get('/admin', [\App\Http\Controllers\Admin\AdminController::class, 'view'])->name('admin.index')->middleware('admin');
    //Admin - project
Route::get('/admin/projects', [\App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('admin.project.all');
Route::get('/admin/project/{id}/view', [\App\Http\Controllers\Admin\ProjectController::class, 'show'])->name('admin.project');
Route::put('/admin/project/{id}/setstatus', [\App\Http\Controllers\Admin\ProjectController::class, 'set_status'])->name('admin.project.setstatus');
Route::get('/admin/project/{id}/modify', [\App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('admin.project.modify');
Route::put('/admin/project/{id}/modify/post', [\App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('admin.project.modify.post');
Route::post('/admin/project/{id}/add/picture', [\App\Http\Controllers\Admin\ProjectController::class, 'add_picture'])->name('admin.project.add.picture');
Route::get('/admin/project/remove/picture/{id}', [\App\Http\Controllers\Admin\ProjectController::class, 'remove_picture'])->name('admin.project.remove.picture');
Route::post('/admin/project/{id}/add_cardboard', [\App\Http\Controllers\Admin\ProjectController::class, 'add_cardboard'])->name('admin.project.add_cardboard');
Route::get('/admin/project/{id}/board', [\App\Http\Controllers\Admin\ProjectController::class, 'show_board'])->name('admin.project.board');
Route::get('/admin/project/boardcard/{id}/setpriority/{priority}', [\App\Http\Controllers\Admin\ProjectController::class, 'card_setpriority'])->name('admin.project.board.card_setpriority');
Route::get('/admin/project/boardcard/{id}/setspace/{space}', [\App\Http\Controllers\Admin\ProjectController::class, 'card_setspace'])->name('admin.project.board.card_setspace');
Route::get('/admin/project/boardcard/{id}/setcategory/{category}', [\App\Http\Controllers\Admin\ProjectController::class, 'card_setcategory'])->name('admin.project.board.card_setcategory');
Route::get('/admin/project/create', [\App\Http\Controllers\Admin\ProjectController::class, 'create'])->name('admin.project.create');
Route::post('/admin/project/store', [\App\Http\Controllers\Admin\ProjectController::class, 'store'])->name('admin.project.store');
Route::get('/admin/project/{id}/update/create', [\App\Http\Controllers\Admin\ProjectController::class, 'add_update'])->name('admin.project.update.create');
Route::post('/admin/project/{id}/update/post', [\App\Http\Controllers\Admin\ProjectController::class, 'post_update'])->name('admin.project.update.post');
Route::get('/admin/project/update/{updateid}/publish', [\App\Http\Controllers\ADmin\ProjectController::class, 'publish_update'])->name('admin.project.update.publish');



// Admin - mail
/*
Route::get('/admin/mail', function (){return view('admin.mail.index');})->name('admin.mail');
Route::get('/admin/mail/read/4', function (){return view('admin.mail.read');})->name('admin.mail.read');
Route::get('/admin/mail/create', function (){return view('admin.mail.create');})->name('admin.mail.create');
Route::get('/admin/mail/reply/5', function (){return view('admin.mail.reply');})->name('admin.mail.reply');
   */ //Admin - tickets
Route::get('/admin/tickets', [\App\Http\Controllers\Admin\AdminTicketsController::class, 'index'])->name('admin.tickets');
Route::get('/admin/ticket/{id}/reply', [\App\Http\Controllers\Admin\AdminTicketsController::class, 'show'])->name('admin.tickets.reply');
Route::post('/admin/ticket/{id}/post', [\App\Http\Controllers\Admin\AdminTicketsController::class, 'add_message'])->name('admin.tickets.post');
Route::get('/admin/ticket/{id}/close', [\App\Http\Controllers\Admin\AdminTicketsController::class, 'close'])->name('admin.tickets.close');

    //Admin - contact
Route::get('/admin/contact', [\App\Http\Controllers\Admin\AdminController::class, 'contact'])->name('admin.contact');
Route::get('/admin/read/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'markasread'])->name('admin.contact.read');
Route::get('/admin/delete/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'delete'])->name('admin.contact.delete');
    //Admin - management
Route::get('/admin/management/content', [\App\Http\Controllers\Admin\ContentManagerController::class, 'index'])->name('admin.management.content');
Route::post('/admin/management/content/add/lang', [\App\Http\Controllers\Admin\ContentManagerController::class, 'add_language'])->name('admin.management.content.lang.add');
Route::post('/admin/management/content/add/ticketscat', [\App\Http\Controllers\Admin\ContentManagerController::class, 'add_ticketcat'])->name('admin.management.content.ticketscat.add');
Route::post('/admin/management/content/add/status', [\App\Http\Controllers\Admin\ContentManagerController::class, 'add_projectstatus'])->name('admin.management.content.projectstatus.add');
Route::post('/admin/management/content/remove/ticketscat', [\App\Http\Controllers\Admin\ContentManagerController::class, 'delet_ticketcat'])->name('admin.management.content.ticketscat.delete');
Route::post('/admin/management/content/remove/status', [\App\Http\Controllers\Admin\ContentManagerController::class, 'delet_projectstatus'])->name('admin.management.content.projectstatus.delete');
Route::post('/admin/management/content/add/projecttytpe', [\App\Http\Controllers\Admin\ContentManagerController::class, 'add_projecttype'])->name('admin.management.content.projecttype.add');
Route::post('/admin/management/content/remove/projecttype', [\App\Http\Controllers\Admin\ContentManagerController::class, 'remove_projecttype'])->name('admin.management.content.projecttype.delete');

