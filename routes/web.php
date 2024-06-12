<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
use App\Models\ClienteModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
Route::get('/', [HomeController::class, 'index']);
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/servico', [ServicoController::class, 'index'])->name('servico');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('login.autenticar');



Route::middleware(['auth', 'admin'])->prefix('dashboard/admin')->group(function () {
    Route::get('/cliente', [ClienteController::class, 'index'])->name('admin.cliente.index');
    Route::get('/clientes/create', [AdminController::class, 'createCliente'])->name('admin.cliente.create');
    Route::post('/clientes', [AdminController::class, 'cadCliente'])->name('admin.cliente.store');
    Route::get('/clientes/{id}/edit', [AdminController::class, 'editCliente'])->name('admin.cliente.edit');
    Route::put('/clientes/{id}', [AdminController::class, 'updateCliente'])->name('admin.cliente.update');
    Route::delete('/clientes/{id}', [AdminController::class, 'deleteCliente'])->name('admin.cliente.delete');
});


Route::middleware(['auth', 'client'])->group(function () {
    Route::get('/cliente/index', [ClienteController::class, 'clienteIndex'])->name('cliente.index');
    // outras rotas protegidas para cliente
});


Route::get('/cliente', [ClienteController::class, 'indexCliente'])->name('cliente.index');
Route::post('/cliente/buscar', [ClienteController::class, 'buscarClientePorEmail'])->name('cliente.buscarPorEmail');
// Add more routes as needed for cliente-specific actions



Route::resource('gallery', GaleriaController::class);


Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');
Route::post('/carrinho/adicionar', [CarrinhoController::class, 'adicionarItem'])->name('carrinho.adicionar');
Route::post('/carrinho/remover', [CarrinhoController::class, 'removerItem'])->name('carrinho.remover');


Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

