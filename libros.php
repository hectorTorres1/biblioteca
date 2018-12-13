<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Eats - Servicios de comida</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>

    <body>

        <nav class="white">
            <div class="wrapper">
                <a href="#!" class="brand-logo center">Libros Prestados</a>
            </div>
            <div class="row">
    <form method="GET" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">search</i>
          <input id="icon_prefix" type="text" class="validate" name="buscar">
          <label for="icon_prefix">Buscar</label>
        </div>
      </div>
    
        </nav>

        <table class="highlight">
            <thead>
                <tr>
                    <th></h>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Clasificación</th>
                    <th>Alumno</th>
                    <th>Carrera</th>
                    <th>Fecha de Entrega</th>
                    <th>Estatus</th>
                </tr>
            </thead>
    
            <tbody>
                <?php
                    require("conexion.php");
                    if(isset($_GET["buscar"]) && $_GET["buscar"]!=""){
                        $buscar=$_GET["buscar"];
                        $sql="select id_prestamo, titulo, autor, editorial, clasificacion, nombre, carrera, fechaEntrega, estatus from prestamos where nombre like '%$buscar%' and estatus = 1 order by id_prestamo desc";
                    }else{
                        $sql="select id_prestamo, titulo, autor, editorial, clasificacion, nombre, carrera, estatus, fechaEntrega, estatus from prestamos where estatus = 1 order by id_prestamo desc "; 
                    }
                    $resultado=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($resultado)>0){
                        while($fila=mysqli_fetch_assoc($resultado)){
                            echo "<tr><td>
                            </td>";
                        
                                
                                echo"<td>";
                                echo $fila["titulo"];
                                echo "</td>";
                                
                                echo"<td>";
                                echo $fila["autor"];
                                echo "</td>";
                                
                                echo"<td>";
                                echo $fila["editorial"];
                                echo "</td>";
                                
                                
                                echo"<td>";
                                echo $fila["clasificacion"];
                                echo "</td>";
                                 
                                echo"<td>";
                                echo $fila["nombre"];
                                echo "</td>";

                                echo"<td>";
                                echo $fila["carrera"];
                                echo "</td>";
                                
                                echo"<td>";
                                echo $fila["fechaEntrega"];
                                echo "</td>";

                                echo"<td>";
                                echo $fila["estatus"];
                                echo "</td>";
                            }
                        }
                        mysqli_close($conn);
                        ?>
               
            </tbody>
        </table>
    
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>$('.dropdown-trigger').dropdown();</script>
        <script>$(document).ready(function(){$('select').formSelect();});</script>
    </body>

</html>
