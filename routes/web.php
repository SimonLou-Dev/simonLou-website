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

Route::get('/', function () {
    return view('welcome');
})->name('index');


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
Route::get('/admin/projects', function (){return view('admin.project.index');})->name('admin.project.all');
Route::get('/admin/project/3', function (){return view('admin.project.view');})->name('admin.project');
Route::get('/admin/project/3/modify', function (){return view('admin.project.modify');})->name('admin.project.modify');
Route::get('/admin/project/3/board', function (){return view('admin.project.board');})->name('admin.project.board');
Route::get('/admin/project/create', function (){return view('admin.project.create');})->name('admin.project.create');
Route::get('/admin/project/3/update/create', function (){return view('admin.project.update.create');})->name('admin.project.update.create');
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
Route::get('/admin/management/content', function (){return view('admin.management.index');})->name('admin.management.content');
Route::get('/admin/management/user', function (){return view('admin.management.user');})->name('admin.management.user');
Route::get('/admin/management/content/modify/lang', function (){return view('admin.management.modify.lang');})->name('admin.management.content.lang');
Route::get('/admin/management/content/modify/cat', function (){return view('admin.management.modify.categories');})->name('admin.management.content.cat');
Route::get('/admin/management/content/modify/status', function (){return view('admin.management.modify.status');})->name('admin.management.content.status');
Route::get('/admin/management/content/modify/grade', function (){return view('admin.management.modify.grade');})->name('admin.management.content.grade');
