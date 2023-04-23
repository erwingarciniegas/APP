<?php
//INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'sitio web con php');
include_once '../configuraciones/bd.php';
$conexion=BD::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$nombre_curso=isset($_POST['nombre_curso'])?$_POST['nombre_curso']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

print_r($_POST);

echo $nombre_curso;

if($accion =''){
    switch($accion){
        case'agregar':
            $sql="INSERT INTO cursos (nombre_curso) VALUE(NULL, :nombre_curso)";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':nombre_curso', $nombre_curso);
            $consulta->execute();
        break;
        case'editar':
            $sql="UPDATE cursos SET nombre_curso=nombre_curso WHERE id=:id";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id, $id');
            $consulta->bindParam(':nombre_curso', $nombre_curso);
            $consulta->execute();
          
        break;
        case'borrar':
            $sql="DELETE FROM cursos WHERE id=:id";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id,$id');
            $consulta->execute();
        break;

        case "seleccionar":
            $sql="SELECT * FROM cursos WHERE id=:id";
            $consulta=$conexionBD->prepare($sql);
            $consulta->execute();
            $curso=$consulta->fetch(PDO::FETCH_ASSOC);
            $nombre_curso=$curso['nombre_curso'];
            
    }    
}


$consulta=$conexionBD->prepare ("SELECT * FROM cursos");
$consulta->execute();
$listaCursos=$consulta->fetchAll();



?>