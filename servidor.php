<?php
  function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "sis";
     $conexion = mysqli_connect($servidor, $usuario, $password, $db);
     return $conexion;
  }
    $conexion = conexion();

    $sql = "SELECT id_tarea, id_fecha , tarea , estado, fechaInsert FROM t_tareas";
    $respuesta = mysqli_query($conexion, $sql);
   

    $cadenaTabla = "";
    
    $cadenaTabla = $cadenaTabla . '<table border="1" class=" table table-dark">
                                  <thead>
                                      <th>ID_tarea</th>
                                      <th>id_fecha</th>
                                      <th>Tarea</th>
                                      <th>Estado</th>
                                      <th>Fecha</th>"
                                  </thead>';
                                  
    while($mostrar = mysqli_fetch_array($respuesta)){
      $cadenaTabla = $cadenaTabla . '<tr>
                                        <td>' . $mostrar['id_tarea'] . '</td>
                                        <td>' . $mostrar['id_fecha'] . '</td>
                                        <td>' . $mostrar['tarea'] . '</td>
                                        <td>' . $mostrar['estado'] . '</td>
                                        <td>' . $mostrar['fechaInsert'] . '</td>
                                    </tr>';
      

  }
        
    $tituloDePagina = "<h2>Manejo de cadenas con php a html</h2>";

                $jumbo ='<div class="jumbotron">
                <h1 class="display-4">Uso de los tags </h1>';

              $figure = '<figure>
              <img src="img/p1.JPG" alt="Trulli" style="width:50%">
              <figcaption>Fig.1 - pastel de 80 a  kg.</figcaption>
            </figure>';


                $parafo = '<p>Registros</p>';

                $video = '<video width="320" height="240" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
              </video>';

                $boton= '<button class="btn btn-danger"> Registrar</button>';

                $audio = '<audio controls>
                <source src="horse.ogg" type="audio/ogg">
                <source src="horse.mp3" type="audio/mpeg">
                Your browser does not support the audio tag.
                </audio>';

                $br = '<br>';

                $parafo = '<p>Registros</p>';

               

              



          
      echo $tituloDePagina  . $cadenaTabla.$jumbo.$boton. $parafo. $audio.$video.$br.$figure;

  ?>