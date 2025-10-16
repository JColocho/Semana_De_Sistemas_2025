<?php
namespace app\controllers;
use app\models\Visitante_model;

class HomeController{

    public function home() {
        return $this->view("HomeView",['title'=>'Inicio']);
    }

    public function registro() {
        return $this->view("RegistroView",['title'=>'Registro']);
    }

    public function registrarDatos(){
        if (isset($_POST)){
            $persona = new Visitante_model();
            if ($persona->guardarVisitante($_POST)){
                return header("Location: "); // todo hace falta a que redirigir
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