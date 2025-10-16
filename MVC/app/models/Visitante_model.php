<?
namespace app\models;
use lib\database;

class Visitante_model extends database{
    public function guardarVisitante($data)
    {
        $conexion = $this->getConnection();
        $stmt = $conexion->prepare("INSERT INTO tbl_visitante(nombre, correo, carnet, mensaje) 
                                VALUES(?, ?, ?, ?)");

        $stmt->bindParam(1, $data["nombre"]);
        $stmt->bindParam(2, $data["correo"]);
        $stmt->bindParam(3, $data["carnet"]);
        $stmt->bindParam(4, $data["mensaje"]);

        if ($stmt->execute()){
            return true;
        } else {
            return false;
        }
        
    }
}

?>