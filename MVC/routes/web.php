<?php
use lib\Route;

Route::get("/",function(){
    echo "RUTA RAIZ";
});

Route::dispatch();
?>