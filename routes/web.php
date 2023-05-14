<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoEspController;
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

Route::group(["prefix" => "users", 
              "as" => "user."], function() 
{

    Route::post("/guardar",  [UserController::class, "guardar"])->name("guardar") ;

}) ;


require __DIR__.'/auth.php';
