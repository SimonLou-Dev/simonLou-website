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
Route::get('/client', function (){return view('client.index');})->name('client.index');
Route::get('/client/project/1', function (){return view('client.project');})->name('client.project');
Route::get('/client/project/1/tickets', function (){return view('client.tickets.index');})->name('client.tickets');
Route::get('/client/project/1/ticket/create',function (){return view('client.tickets.create');})->name('client.ticket.create');
Route::get('/client/project/1/ticket/1/chat', function (){return view('client.tickets.chat');})->name('client.ticket.chat');

// Admin Route
Route::get('/admin', function (){return view('admin.index');})->name('admin.index');
    //Admin - project
Route::get('/admin/projects', [\App\Http\Controllers\ProjectController::class, 'index'])->name('admin.project.all');
Route::get('/admin/project/{id}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('admin.project');
Route::get('/admin/project/{id}/modify', [\App\Http\Controllers\ProjectController::class, 'edit'])->name('admin.project.modify');
Route::get('/admin/project/{id}/board', [\App\Http\Controllers\ProjectController::class, 'board'])->name('admin.project.board');
Route::get('/admin/project/{id}/update/create', [\App\Http\Controllers\ProjectController::class, 'add_update'])->name('admin.project.update.create');
Route::get('/admin/project/create', [\App\Http\Controllers\ProjectController::class, ''])->name('admin.project.create');
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
