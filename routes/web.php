
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PerfilController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [BlogController::class, 'index'])->name('blog.index');

Route::get('/principal', [BlogController::class, 'principal'])->name('blog.principal');

// Route::get('/MostrarPostagens/{id}/curtida/{id}', [App\Http\Controllers\Listar_PubliController::class, 'curtida'])->name('MostrarPostagens.curtida')->middleware('auth');

Route::get('/curtida/{id}',[App\Http\Controllers\CurtidaController::class, 'curtida'])->name('MostrarPostagens.curtida')->middleware('auth');


Auth::routes();

Route::middleware(['auth'])->group(function () {
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'perfil'])->name('perfil.perfil');
    Route::post('/perfil/{id}/edit', [App\Http\Controllers\PerfilController::class, 'perfilUpdate'])->name('perfil.update');


    Route::get('/posters', [App\Http\Controllers\postersController::class, 'index'])->name('posters');

    Route::get('/MostrarCategoria', [App\Http\Controllers\CategoriaController::class, 'MostrarCategoria'])->name('MostrarCategoria');

    Route::get('/MostrarPostagens/{id}', [App\Http\Controllers\PostagemController::class, 'MostrarPostagens'])->name('MostrarPostagens');

    Route::get('/MostrarPostagem/{id}', [App\Http\Controllers\PostagemController::class, 'MostrarPostagem'])->name('MostrarPostagem');



    // ------------------------------ CRUD CATEGORIA ---------------------------------------------

    // LISTAR GET
    Route::get('/categoria', [CategoriaController::class, 'index'])->middleware('can:is_admin')->name('categoria.index');

    // CREATE GET / STORE POST
    // create
    Route::get('/categoria/create', [CategoriaController::class, 'create'])->middleware('can:is_admin')->name('categoria.create');

    //store
    Route::post('/categoria/create', [CategoriaController::class, 'store'])->middleware('can:is_admin')->name('categoria.store');

    // SHOW - GET
    Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->middleware('can:is_admin')->name('categoria.show');

    // EDIT GET / UPDATE PUT
    // edit
    Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->middleware('can:is_admin')->name('categoria.edit');

    // update
    Route::put('/categoria/{id}/edit', [CategoriaController::class, 'update'])->middleware('can:is_admin')->name('categoria.update');

    // DESTROY DELETE
    Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->middleware('can:is_admin')->name('categoria.destroy');


    // ------------------------------ CRUD POSTAGEM ---------------------------------------------

    // LISTAR GET
    Route::get('/postagem', [PostagemController::class, 'index'])->middleware('can:is_admin')->name('postagem.index');

    // CREATE GET / STORE POST
    // create
    Route::get('/postagem/create', [PostagemController::class, 'create'])->middleware('can:is_admin')->name('postagem.create');

    //store
    Route::post('/postagem/create', [PostagemController::class, 'store'])->middleware('can:is_admin')->name('postagem.store');

    // SHOW - GET
    Route::get('/postagem/{id}', [PostagemController::class, 'show'])->middleware('can:is_admin')->name('postagem.show');

    // EDIT GET / UPDATE PUT
    // edit
    Route::get('/postagem/{id}/edit', [PostagemController::class, 'edit'])->middleware('can:is_admin')->name('postagem.edit');

    // update
    Route::put('/postagem/{id}/edit', [PostagemController::class, 'update'])->middleware('can:is_admin')->name('postagem.update');

    // DESTROY DELETE
    Route::delete('/postagem/{id}', [PostagemController::class, 'destroy'])->middleware('can:is_admin')->name('postagem.destroy');

});

// ------------------------------ BLOG ---------------------------------------------

Route::get('/blog/categoria', [BlogController::class, 'categoria'])->name('blog.categoria');

Route::get('/blog/categoria/{id}', [BlogController::class, 'categoriaPostagem'])->name('blog.categoriaPostagem');

Route::get('/blog/autor', [BlogController::class, 'autor'])->name('blog.autor');

Route::get('/blog/autor/{id}', [BlogController::class, 'autorPostagem'])->name('blog.autorPostagem');

Route::get('/blog/postagem/{id}', [BlogController::class, 'postagem'])->name('blog.postagem');

Route::post('blog/postagemComentario/{id}', [BlogController::class, 'postagemComentario'])->name('blog.postagemComentario');

Route::get('blog/curtida/{id}', [BlogController::class, 'curtida'])->name('blog.curtida');
