<?php

use App\Http\Controllers\ClientsController;
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
Route::get('env', function(){
    var_dump($_ENV);
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cad', function () {
    return view('cadastro');
});
Route::get('controller/blade/cadastro' , 'App\Http\Controllers\ClientsController@cadastrar');
Route::get('lista' , 'App\Http\Controllers\ClientsController@listar');

Route::get('form' , 'App\Http\Controllers\ClientsController@formCadastrar');

Route:: post('cadastro' , 'App\Http\Controllers\ClientsController@cadastrar');
//ClientsController::class.'@cadastrar'); Outra forma de indicar o controller
Route::get('{id}/editar' , 'App\Http\Controllers\ClientsController@formEditar');

Route:: post('{id}/editar' , 'App\Http\Controllers\ClientsController@editar')
;
Route:: get('{id}/excluir' , 'App\Http\Controllers\ClientsController@excluir')
;





/*Route::get('/for/{value}', function ($value) {
    return view('for')
    ->with('value', $value);
});
Route::get('/cliente', function(){
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