<?php
use lib\Route;
use app\controllers\HomeController;

// Route::get("/",function(){
//     echo "RUTA RAIZ";
// });

Route::get("/",[HomeController::class,("home")]);
Route::get("/registro",[HomeController::class,("registro")]);


Route::dispatch();
?>