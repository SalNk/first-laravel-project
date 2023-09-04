<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|bre
*/

// Route::get('/', [PostController::class, 'index'])->name('welcome');
// Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/contact', [PostController::class, 'contact'])->name('contact');
// Route::get('/test', function () {
//     return view('test');
// });

// Practice
Route::get('/', [MemberController::class, 'index'])->name('members');
Route::get('/member/create', [MemberController::class, 'create'])->name('member.create');
Route::post('/member/create', [MemberController::class, 'store'])->name('member.store');

Route::get('/blog', [MemberController::class, 'blog'])->name('blog');


Route::get('/member/edit/{id}', [MemberController::class, 'edit'])->name('member.edit');
Route::put('/member/update/{id}', [MemberController::class, 'update'])->name('member.update');
Route::delete('/member/delete/{id}', [MemberController::class, 'delete'])->name('member.delete');
Route::get('/post/{id}', [MemberController::class, 'showPost'])->name('post.show');




Route::get('/member/{id}', [MemberController::class, 'show'])->name('member.show');

// Route::get('/post', function(){
//     return response()->json([
//         'title' => 'mon titre',
//         'comment' => 'mon commentaire'
//     ]);
// });

Route::get('aa', function () {
    return view('welcome');
});

// Route::get('/test/{userName}', [TestController::class, 'methode1']);

// Route::get('/test', [TestController::class, 'test']);
// Route::post('/test', [TestController::class, 'store']);


// Route::get('/accueil', [ArticleController::class, 'index'])->name('accueil');
// Route::post('/accueil', [ArticleController::class, 'store'])->name('articles');

// // Groupe de route qui sont dispos quand le User n'est pas authentifié
// Route::middleware(['guest'])->group(function () {
//     Route::get('/register', [UserController::class, 'register'])->name('registration');
//     Route::post('/register', [UserController::class, 'handleRegistration'])->name('registration');
//     Route::get('/login', [UserController::class, 'login'])->name('login');
//     Route::post('/login', [UserController::class, 'handleLogin'])->name('login');
// });

// // Groupe de route qui ne sont dispos que quand le User est authentifié
// Route::middleware(['auth'])->group(function () {
//     Route::prefix('articles')->group(function () {
//         Route::get('/{article}', [ArticleController::class, 'show'])->name('articles.show')->withoutMiddleware('auth');
//         Route::get('/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
//         Route::put('/{article}/update', [ArticleController::class, 'update'])->name('articles.update');
//         Route::delete('/{article}/delete', [ArticleController::class, 'delete'])->name('articles.delete');
//     });
//     Route::get('home', [UserController::class, 'dashboard'])->name('dashboard');
//     Route::get('/mine', [ArticleController::class, 'mine'])->name('articles.mine');
//     Route::get('/logout', [UserController::class, 'logout'])->name('logout');
// });