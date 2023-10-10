<?php

class VinotecaView{
    public function showVinos($vinos){
               
        require 'templates/header.php';
       
        echo "<h1>Vinos</h1>";
               
        echo "<ul>";
            foreach($vinos as $vino){
                
                echo"<li><a href='mostrarVino/$vino->ID_vino'>$vino->Nombre</a> - <a href='mostrarCepa/$vino->id_cepa'>$vino->Nombre_cepa</a> - <a href='mostrarBodega/$vino->id_bodega'>$vino->Nombre_bodega</a></li> ";
            }
        echo "</ul>";
    }

    public function showVinosPorBodega($vinos, $bodega){
               
        require 'templates/header.php';
       
        echo "<h1>Vinos por bodega: $bodega->Nombre_bodega</h1>";
               
        echo "<ul>";
            foreach($vinos as $vino){
                
                echo"<li><a href='mostrarVino/$vino->ID_vino'>$vino->Nombre</a> - <a href='mostrarCepa/$vino->id_cepa'>$vino->Nombre_cepa</a></li> ";
            }
        echo "</ul>";
    }

    public function showVinosPorCepa($vinos, $cepa){
               
        require 'templates/header.php';
       
        echo "<h1>Vinos por cepa: $cepa->Nombre_cepa</h1>";
               
        echo "<ul>";
            foreach($vinos as $vino){
                
                echo"<li><a href='mostrarVino/$vino->ID_vino'>$vino->Nombre</a> - <a href='mostrarCepa/$vino->id_cepa'>$vino->Nombre_cepa</a> - <a href='mostrarBodega/$vino->id_bodega'>$vino->Nombre_bodega</a></li> ";
            }
        echo "</ul>";
    }
    

    public function showVino($vino){
        require 'templates/header.php';
        echo "<h1>Info Vino: $vino->Nombre </h2>";
        
        
        echo "<table>
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Azucar</th>
                        <th>Cepa</th>
                        <th>Bodega</th>
                    </tr>
                <thead>
                <tbody>

                <tr>
                    <td>$vino->Tipo</td>
                    <td>$vino->Azucar</td>
                    <td>$vino->Nombre_cepa</td>
                    <td>$vino->Nombre_bodega</td>
                </tr>
                </tbody>    
            </table>";
    }

    public function showBodegas($bodegas){
        
        require 'templates/header.php';
        
        echo "<h1>Bodegas</h1>";
               
        echo "<ul>";
            foreach($bodegas as $bodega){
                
                echo"<li><a href='mostrarVinosPorBodega/$bodega->id_bodega'>$bodega->Nombre_bodega</a> ";
            }
        echo "</ul>";
    }


    public function showBodega($bodega){

        require 'templates/header.php';
        echo "<a href='listar'> Home </a>";
    
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

    public function showCepas($cepas){
        
        require 'templates/header.php';
        
        echo "<h1>Cepas</h1>";
               
        echo "<ul>";
            foreach($cepas as $cepa){
                
                echo"<li><a href='mostrarVinosPorCepa/$cepa->id_cepa'>$cepa->Nombre_cepa</a>";
            }
        echo "</ul>";
    }

    public function showCepa($cepa){
        require 'templates/header.php';
    
        echo "<h1>Info cepa: $cepa->Nombre_cepa </h2>";
        echo "<a href='listar'> Home </a>";

        
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
}
    
?>

