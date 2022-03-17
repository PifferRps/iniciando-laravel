<?php

use Illuminate\Http\Request;
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
});
Route::get('/cad', function () {
    return view('cadastro');
});
Route::get('/blade', function () {
    $nome = "luiz";
    $variavel1 = "valor";
    return view(view:'teste')
    ->with('nome', $nome)
    ->with('variavel1', $variavel1);
    //
});

Route::get('/for/{value}', function ($value) {
    return view('cadastro');
});
/*Route::get('/cliente', function(){
    $csrfToken = csrf_token();
    $html = <<<HTML
    <html>
        <body>
            <h1>Cliente</h1>
            <form action="/cliente/cadastrar" method="post">
                <input type="hidden"name="_token" value=$csrfToken >
                <input type="text" name="nome">
                <button type="submit">Enviar</button>
            </form>
        </body>
    </html>  
    HTML;
    return $html;  
});
Route::post('/cliente/cadastrar', function (Request $request) {
    echo $request->get('nome');
});*/