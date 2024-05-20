<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
use App\Models\ClienteModel;
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

Route::get('/',[HomeController::class,'index'])->name('home');//Pagina Home

Route::get('/sobre',[SobreController::class,'index'])->name('sobre');//Pagina Sobre

Route::get('/servico',[ServicoController::class,'index'])->name('servico');//

Route::get('/contato',[ContatoController::class,'index'])->name('contato');//Pagina Contato

Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::post('/login', [LoginController::class, 'autenticar'])->name('login.autenticar');


Route::get('/dashboard/admin', [AdminController::class, 'index'])
->name('dashboard.admin')
->middleware('autenticacaoCliente');


Route::get('/buscar-cliente', function ( $request) {
    $emaiCliente = $request->input('email'); // Supondo que você esteja passando o email via URL

    $cliente = ClienteModel::where('email', $emaiCliente)->first();

    if ($cliente) {
        // Faça algo com os dados do cliente encontrado, como retornar uma view
        return view('cliente', ['cliente' => $cliente]);
    } else {
        // Tratar caso nenhum cliente seja encontrado, como retornar uma mensagem de erro
        return redirect()->back()->with('error', 'Cliente não encontrado.');
    }
});


Route::get('/carrinho', 'App\Http\Controllers\CarrinhoController@index');

Route::post('/adicionar-ao-carrinho', 'App\Http\Controllers\CarrinhoController@adicionarAoCarrinho')->name('adicionarAoCarrinho');

Route::post('/remover-item-carrinho', 'App\Http\Controllers\CarrinhoController@removerItemCarrinho')->name('removerItemCarrinho');


Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index')->name('produtos');



Route::middleware('autenticacaoCliente')->group(function () {
    // Rotas protegidas pelo middleware para clientes
    Route::get('/cliente',[ClienteController::class,'index'])->name('dashboard.cliente');
});
