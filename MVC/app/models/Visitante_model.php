<?
namespace app\models;
use lib\database;

class Visitante_model extends database{
    public function guardarVisitante($data)
    {
        if ($data) {
            $nombre = $data["nombre"];
            $correo = $data["correo"];
            $carnet = $data["carnet"];
            $mensaje = $data["mensaje"];

            $errores = [];

            if (!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s\-]+$/", $nombre)) {
                $errores[] = "El nombre solo puede contener letras, espacios y guiones.";
            }

            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $errores[] = "El correo electrónico no es válido.";
            }

            if (!empty($carnet) && !preg_match("/^[A-Z]{2}\d{5}$/", $carnet)) {
                $errores[] = "El carnet debe tener dos letras mayúsculas y cinco números. Ejemplo: CM23015.";
            }

            if (empty($mensaje)) {
                $errores[] = "El campo mensaje no puede estar vacío.";
            }

            if (empty($errores)) {
                $conexion = $this->getConnection();

                if (!empty($carnet)) {
                    $stmt = $conexion->prepare("SELECT COUNT(*) FROM tbl_visitante WHERE carnet = ?");
                    $stmt->bindParam(1, $carnet);
                    $stmt->execute();
                    $existe = $stmt->fetchColumn();

                    if ($existe > 0) {
                        $errores[] = "El carnet ya está registrado.";
                    }
                }

                if (empty($errores)) {
                    $stmt = $conexion->prepare("INSERT INTO tbl_visitante(nombre, correo, carnet, mensaje) VALUES (?, ?, ?, ?)");
                    $stmt->bindParam(1, $nombre);
                    $stmt->bindParam(2, $correo);
                    $stmt->bindParam(3, $carnet);
                    $stmt->bindParam(4, $mensaje);

                    if ($stmt->execute()) {
                        return true;  
                    }
                }
            }

            return false; 
        }
    }


}

?>