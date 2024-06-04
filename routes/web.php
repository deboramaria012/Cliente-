<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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



Route::resource('gallery', GaleriaController::class);

Route::prefix('admin')->group(function () {

    Route::get('/clientes', [AdminController::class,'indexcliente'])->name('admin.cliente.index');
    Route::get('/clientes/create', [AdminController::class,'createcliete'])->name('admin.cliente.create');
    Route::post('/clientes', [AdminController::class, 'cadcliente'])->name('admin.cliente.cad');
    Route::get('/clientes/{id}/edit', [AdminController::class, 'editcliente'])->name('admin.cliente.edit');
    Route::put('/clientes/{id}',[AdminController::class, 'updatecliente'] )->name('admin.cliente.update');
    Route::delete('/clientes/{id}', [AdminController::class, 'desativarcliente'])->name('admin.cliente.desativar');
});




// Route::get('/buscar-cliente', function (Request $request) {
//     $emailCliente = $request->input('email'); // Supondo que você esteja passando o email via URL

//     if ($emailCliente) {
//         $cliente = ClienteModel::where('email', $emailCliente)->first();

//         if ($cliente) {
//             // Faça algo com os dados do cliente encontrado, como retornar uma view
//             return view('cliente', ['cliente' => $cliente]);
//         } else {
//             // Tratar caso nenhum cliente seja encontrado, como retornar uma mensagem de erro
//             return redirect()->back()->with('error', 'Cliente não encontrado.');
//         }
//     } else {
//         return redirect()->back()->with('error', 'Email não fornecido.');
//     }
// })->name('cliente.buscar');

Route::post('/buscar-cliente', [ClienteController::class, 'buscarClientePorEmail'])->name('cliente.buscarPorEmail');
Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');

Route::post('/adicionar-ao-carrinho', 'App\Http\Controllers\CarrinhoController@adicionarAoCarrinho')->name('adicionarAoCarrinho');
Route::post('/remover-item-carrinho', 'App\Http\Controllers\CarrinhoController@removerItemCarrinho')->name('removerItemCarrinho');
Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index')->name('produtos');
