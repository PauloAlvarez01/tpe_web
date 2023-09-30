<?php

class ComentarioView {

    public function showComentarios($comentarios){
        
        require 'templates/header.php';
        require 'templates/form_alta.php';
        
        echo "<ul>";
            foreach($comentarios as $comentario){
                echo"<li>$comentario->comentario</li>";
            }
        echo "</ul>";
    }
    public function showError($error) {
        require 'templates/header.php';
        
        echo "
            <div>
                $error
            </div> 
        ";
    }
}