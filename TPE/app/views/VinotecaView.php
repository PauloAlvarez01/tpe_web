<?php

class VinotecaView{
    public function showVinos($vinos){
        
        require 'templates/header.php';

        echo "<h1>Vinos</h1>";
               
        echo "<ul>";
            foreach($vinos as $vino){
                
                echo"<li>$vino->Nombre - $vino->Tipo - $vino->Azucar - <a href='mostrarCepa/$vino->id_cepa'>$vino->Nombre_cepa</a> - <a href='mostrarBodega/$vino->id_bodega'>$vino->Nombre_bodega</a></li> ";
            }
        echo "</ul>";
    }

    public function showCepa($cepa){
        require 'templates/header.php';
    
        echo "<h1>Info cepa: $cepa->Nombre_cepa </h2>";
        echo "<a href='listar'> Volver </a>";

        
        echo "<table>
                <thead>
                    <tr>
                        <th>Aroma</th>
                        <th>Maridaje</th>
                        <th>Textura</th>
                    </tr>
                <thead>
                <tbody>

                <tr>
                    <td>$cepa->Aroma</td>
                    <td>$cepa->Maridaje</td>
                    <td>$cepa->Textura</td>
                </tr>
                </tbody>    
            </table>";
    }


    public function showBodega($bodega){

        require 'templates/header.php';
    
        echo "<h1>Info bodega: $bodega->Nombre_bodega </h2>";
        echo "<a href='listar'> Volver </a>";

        
        echo "<table>
                <thead>
                    <tr>
                        <th>Ubicación</th>
                        <th>Año</th>
                        <th>Características</th>
                    </tr>
                <thead>
                <tbody>

                <tr>
                    <td>$bodega->Ubicación</td>
                    <td>$bodega->Año</td>
                    <td>$bodega->Características</td>
                </tr>
                </tbody>    
            </table>";
    }
}
    
?>

