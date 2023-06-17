<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoEspController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\EtiquetaPersController;
use App\Http\Controllers\PaginaPrincipalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::redirect("/", "inicio")->name("home") ;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');


Route::group(["prefix" => "inicio", 
              "as" => "inicio.",
              ], function() 
{
    Route::get("/",         [PaginaPrincipalController::class, "inicio"])->name("mostrar") ;
}) ;

Route::group(["prefix" => "productosEsp", 
              "as" => "productoEsp.",
              "middleware" => ["auth"]], function() 
{
    Route::get("/",         [ProductoEspController::class, "listar"])->name("listar") ;
    Route::get("/crear",    [ProductoEspController::class, "crear"])->name("crear") ;
    Route::post("/guardar",  [ProductoEspController::class, "guardar"])->name("guardar") ;
    Route::get("/borrar/{idProEsp}", [ProductoEspController::class, "borrar"])->name("borrar") ;
    Route::get("/editar/{idProEsp}", [ProductoEspController::class, "editar"])->name("editar") ;
    Route::post("/actualizar/{idProEsp}", [ProductoEspController::class, "guardarEdicion"])->name("guardarEdicion") ;
}) ;


Route::group(["prefix" => "etiquetasPers", 
              "as" => "etiquetaPers.",
              "middleware" => ["auth"]], function() 
{
    Route::get("/",         [EtiquetaPersController::class, "listar"])->name("listar") ;
    Route::get("/",         [EtiquetaPersController::class, "listar"])->name("listar") ;
    Route::get("/crear",    [EtiquetaPersController::class, "crear"])->name("crear") ;
    Route::post("/guardar",  [EtiquetaPersController::class, "guardar"])->name("guardar") ;
    Route::get("/borrar/{idEtiq}", [EtiquetaPersController::class, "borrar"])->name("borrar") ;
    Route::get("/editar/{idEtiq}", [EtiquetaPersController::class, "editar"])->name("editar") ;
    Route::post("/actualizar/{idEtiq}", [EtiquetaPersController::class, "guardarEdicion"])->name("guardarEdicion") ;
}) ;

Route::group(["prefix" => "productos", 
              "as" => "producto.",
              "middleware" => ["auth"]], function() 
{
    Route::get("/",         [ProductoController::class, "listar"])->name("listar") ;
    Route::get("/crear",    [ProductoController::class, "crear"])->name("crear") ;
    Route::post("/guardar",  [ProductoController::class, "guardar"])->name("guardar") ;
    Route::get("/borrar/{idPro}", [ProductoController::class, "borrar"])->name("borrar") ;
    Route::get("/editar/{idPro}", [ProductoController::class, "editar"])->name("editar") ;
    Route::post("/actualizar/{idPro}", [ProductoController::class, "guardarEdicion"])->name("guardarEdicion") ;
}) ;


Route::group(["prefix" => "pedidos", 
              "as" => "pedido.",
              "middleware" => ["auth"]], function() 
{
    Route::get("/",         [PedidoController::class, "listar"])->name("listar") ;
    Route::get("/crear/{idPro?}",    [PedidoController::class, "crear"])->name("crear") ;
    Route::get("/verPedidoActual/",    [PedidoController::class, "verPedidoActual"])->name("verPedidoActual") ;
    Route::post("/guardar",  [PedidoController::class, "guardar"])->name("guardar") ;
    Route::get("/borrarFila/{idPro}",  [PedidoController::class, "borrarFila"])->name("borrarFila") ;
    Route::get("/visualizar/{idPedido}", [ProductoController::class, "visualizar"])->name("visualizar") ;
    Route::get("/borrar/{idPedido}", [PedidoController::class, "borrar"])->name("borrar") ;
    Route::get("/editar/{idPedido}", [PedidoController::class, "editar"])->name("editar") ;
    Route::post("/actualizar/{idPedido}", [PedidoController::class, "guardarEdicion"])->name("guardarEdicion") ;
}) ;

Route::group(["prefix" => "users", 
              "as" => "user."], function() 
{

    Route::post("/guardar",  [UserController::class, "guardar"])->name("guardar") ;

}) ;


require __DIR__.'/auth.php';
