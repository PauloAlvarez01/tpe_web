<?php

class PeliculaView{
    public function showGeneros($generos){
        
        require 'templates/header.php';

        echo "<h1>Peliculas por género</h1>";
               
        echo "<ul>";
            foreach($generos as $genero){
                
                echo"<li><a href='mostrar/$genero->genre'>$genero->genre</a></li>";
            }
        echo "</ul>";
    }

    public function showPeliculas($peliculas, $genero){

        require 'templates/header.php';

        echo "<h1>Lista por género: $genero </h2>";
        echo "<a href='listar'> Volver </a>";

        // imprime la tabla de peliculas
        echo "<table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Año</th>
                        <th>Estudio</th>
                    </tr>
                <thead>
                <tbody>
        ";
        foreach($peliculas as $pelicula) {
            echo "
                    <tr>
                        <td>$pelicula->title</td>
                        <td>$pelicula->year</td>
                        <td>$pelicula->studio</td>
                    </tr>
            ";
        }
        echo " </tbody>    
            </table>";
            }
        }
?>

