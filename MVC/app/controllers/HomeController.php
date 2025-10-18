<?php
namespace app\controllers;
use app\models\Visitante_model;
use lib\Route; 


class HomeController{

    public function home() {
        return $this->view("HomeView",['title'=>'Inicio']);
    }

    public function registro() {
        return $this->view("RegistroView",['title'=>'Registro']);
    }

    public function dia1() {
        return $this->view("Dia1View",['title'=>'Día 1']);
    }
    public function dia2() {
        return $this->view("Dia2View",['title'=>'Día 2']);
    }
    public function dia3() {
        return $this->view("Dia3View",['title'=>'Día 3']);
    }
    public function dia4() {
        return $this->view("Dia4View",['title'=>'Día 4']);
    }
    public function dia5() {
        return $this->view("Dia5View",['title'=>'Día 5']);
    }
    public function miInfo() {
        return $this->view("MiInformacionView",['title'=>'Mi Información']);
    }
public function registrarDatos()
{
    if ($_POST) {
        $persona = new Visitante_model();

        if ($persona->guardarVisitante($_POST)) {
            header("Location: " . Route::$URL_BASE . "/");
            exit();
        } else {
            header("Location: " . Route::$URL_BASE . "/registro");
            exit();
        }
    }
}


        public function view($vista,$data=[]){
        extract($data); //apartir de un arreglo asosiativo genera variables

        if(file_exists("../app/views/$vista.php")){
            ob_start();
            include "../app/views/$vista.php";
            $content = ob_get_clean();

            // vista dentro del layout principal
            ob_start();
            include "../app/views/layouts/main.php";

            return ob_get_clean();
        }
        else{
            echo "vista no encontrada ../app/views/$vista.php";
        }
    }
}

?>