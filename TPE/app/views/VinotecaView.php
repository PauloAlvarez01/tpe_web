<?php

class VinotecaView{
    public function showVinos($vinos){
               
        require 'templates/header.php';
       
        echo "<h1>Vinos</h1>";
               
        echo "<ul>";
            foreach($vinos as $vino){
                
                echo"<li><a href='mostrarVino/$vino->ID_vino'>$vino->Nombre</a> - <a href='mostrarCepa/$vino->id_cepa'>$vino->Nombre_cepa</a> - <a href='mostrarBodega/$vino->id_bodega'>$vino->Nombre_bodega</a> - <a href='eliminarVino/$vino->ID_vino' >Borrar</a> - <a href='modificarVino/$vino->ID_vino' >Modificar</a> </li> ";
            }
        echo "</ul>";

        echo "<a href='agregarVino' >Agregar</a>";
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
                
                echo"<li><a href='mostrarVino/$vino->ID_vino'>$vino->Nombre</a> - <a href='mostrarBodega/$vino->id_bodega'>$vino->Nombre_bodega</a></li> ";
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
                    <td><a href='mostrarCepa/$vino->id_cepa'>$vino->Nombre_cepa</a></td>
                    <td><a href='mostrarBodega/$vino->id_bodega'>$vino->Nombre_bodega</a></td>
                </tr>
                </tbody>    
            </table>";
    }

    public function showBodegas($bodegas){
        
        require 'templates/header.php';
        
        echo "<h1>Bodegas</h1>";
               
        echo "<ul>";
            foreach($bodegas as $bodega){
                
                echo"<li><a href='mostrarBodega/$bodega->id_bodega'>$bodega->Nombre_bodega</a> - <a href='eliminarBodega/$bodega->id_bodega' >Borrar</a> - <a href='modificarBodega/$bodega->id_bodega' >Modificar</a> </li>";
            }
        echo "</ul>";

        echo "<a href='agregarBodega' >Agregar</a>";
    }


    public function showBodega($bodega){

        require 'templates/header.php';
            
        echo "<h1>Info bodega: $bodega->Nombre_bodega </h2>";
                
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

    public function showBuscarPorBodega($bodegas){
        
        require 'templates/header.php';
        
        echo "<h1>Selecione una Bodega para buscar sus vinos</h1>";
               
        echo "<ul>";
            foreach($bodegas as $bodega){
                
                echo"<li><a href='mostrarVinosPorBodega/$bodega->id_bodega'>$bodega->Nombre_bodega</a> </li>";
            }
        echo "</ul>";
        
    }

    public function showCepas($cepas){
        
        require 'templates/header.php';
        
        echo "<h1>Cepas</h1>";
               
        echo "<ul>";
            foreach($cepas as $cepa){
                
                echo"<li><a href='mostrarCepa/$cepa->id_cepa'>$cepa->Nombre_cepa</a> <a href='eliminarCepa/$cepa->id_cepa' >Borrar</a> - <a href='modificarCepa/$cepa->id_cepa' >Modificar</a> </li>";
            }
        echo "</ul>";

        echo "<a href='agregarCepa' >Agregar</a>";
    }

    public function showCepa($cepa){
        require 'templates/header.php';
    
        echo "<h1>Info cepa: $cepa->Nombre_cepa </h2>";
                
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

    public function showBuscarPorCepa($cepas){
        
        require 'templates/header.php';
        
        echo "<h1>Selecione una Cepa para buscar sus vinos</h1>";
               
        echo "<ul>";
            foreach($cepas as $cepa){
                
                echo"<li><a href='mostrarVinosPorCepa/$cepa->id_cepa'>$cepa->Nombre_cepa</a> </li>";
            }
        echo "</ul>";
        
    }

    public function showFormularioModificarVino($id, $vino, $bodegas, $cepas){
        require 'templates/header.php';
        
        require 'templates/formulario_modificacion_vino.phtml';
    }

    public function showFormularioModificarBodega($id, $bodega){
        require 'templates/header.php';
        
        require 'templates/formulario_modificacion_bodega.phtml';
    
    }

    public function showFormularioModificarCepa($id, $cepa){
        require 'templates/header.php';
        
        require 'templates/formulario_modificacion_cepa.phtml';
    
    }

    public function showFormularioAgregarVino($bodegas, $cepas){
        require 'templates/header.php';
        
        require 'templates/formulario_agregar_vino.phtml';
    }

    public function showFormularioAgregarBodega(){
        require 'templates/header.php';
        
        require 'templates/formulario_agregar_bodega.phtml';
    
    }

    public function showFormularioAgregarCepa(){
        require 'templates/header.php';
        
        require 'templates/formulario_agregar_cepa.phtml';
    
    }

    public function showError($error) {
        echo"$error";
    }
}
    
?>

