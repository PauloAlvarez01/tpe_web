<?php

class LimpiezaView{
    public function showProductos($productos){
        
        require 'templates/header.php';
        
        echo "<ul>";
            foreach($productos as $producto){
                echo"<li><a href='mostrar/$producto->id'>$producto->producto_limpieza</a></li>";
            }
        echo "</ul>";
    }

    public function showDescripcion($producto){

        require 'templates/header.php';

        echo"<p>Descripcion: $producto->descripcion</p>";
        echo"<p>Precio: $producto->precio</p>";
        echo"<a href='listar'>volver</a>";
    }
}
?>

