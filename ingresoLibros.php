<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $anio = $_POST['anio'];
    
    echo "<h2>El libro $titulo, se ha ingresado exitosamente.</h2>";
    
    if(!is_dir('libros')) {
        mkdir('libros');
    }
    
    $archivo = fopen('libros/libros.txt','a');
    fwrite($archivo, "$titulo, $autor, $anio\n");
    fclose($archivo);
    
}
?>