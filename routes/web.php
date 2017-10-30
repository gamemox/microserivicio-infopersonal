<?php
//use App\Models\Score;
//use Illuminate\Http\Request
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/infopersonal/{rut}', ['uses'=>'InfoPersonalController@getInfoPersonalAlu']);

//$router->get('/infopersonal/{rut}', ['uses'=>'InfoPersonalController@getInfoPersonalAlu']);


//$router->post('/editinfoperso', ['uses'=>'EditInfoPersonalController@getEditInfoPersonalAlu']);
$router->post('/editinfoperso', function (Request $request) use ($router) {
    return response()->json("hola");
});



//$router->post('/infopersonal/edit', function (Request $request) use ($router) {
//    return $router->app->version();
//});
//$router->post('/infopersonal/{rut}', ['uses'=>'InfoPersonalController@EditInfoPersonalAlu']);

