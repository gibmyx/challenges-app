<?php

use Illuminate\Support\Facades\Route;
use Medine\Apps\ChallengeFive\Backend\Controller\TaskPostController;
use Medine\Apps\ChallengeOne\Backend\Controller\InvoicesIdGetController;
use Medine\Apps\ChallengeOne\Backend\Controller\InvoiceTotalGetController;
use Medine\Apps\ChallengeOne\Backend\Controller\ProductsNameGetController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('invoices/id', InvoicesIdGetController::class);
Route::get('/invoices/{id}/total', InvoiceTotalGetController::class);
Route::get('products/name', ProductsNameGetController::class);

//tasks
Route::post('tasks', TaskPostController::class);
