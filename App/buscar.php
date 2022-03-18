<?php
/*$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'ejemplo'
);

if (isset($conn)) {
    echo 'DB is connected';
}
*/
    $mysqli = new mysqli("4.tcp.ngrok.io:13441","root", "asd123", "user_db");

    $salida = "";
    $validacion ="";
    $query = "SELECT * FROM users where cedula =0";

    if(isset($_POST['consulta'])){
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM users where cedula =0";
        $validacion ="No";
        $value = intval($_POST['consulta']);
        //echo $value."<br>";
        $fp = fopen("https://infelcom.co/datos.txt", "r");
        while (!feof($fp)){
            $linea = intval(fgets($fp));
            //echo $linea."<br>";
            if($value === $linea){                
                $query = "SELECT * FROM `users` WHERE cedula=".$q."";
                $validacion ="verificado";
            }
        }
        fclose($fp);

    }

    $resultado = $mysqli->query($query);
    if($validacion == "verificado"){

        if($resultado->num_rows > 0){
    
            $salida.="<table class='tabla_datos'>
                        <thead>
                            <tr>
                                <td>cedula</td>
                                <td>Usuario</td>
                                <td>Contraseña</td>
                            </tr>
                        </thead>
                        <tbody>";
    
            while($fila = $resultado->fetch_assoc()){
                $salida.="<tr>
                        <td>".$fila['cedula']."</td>
                        <td>".$fila['usuario']."</td>
                        <td>".$fila['contra']."</td>
                </tr>";
            }
    
            $salida.="</tbody></table>";
    
        }else if($validacion == "verificado"){
            $salida.="Existe en la nube pero no en la db";
        }
         else{
            $salida.="Existe la cedula pero no hay datos en la db";
          }
    }else{
        $salida="No existe la cedula en la nube";
    }

    echo $salida;

    $mysqli->close();

?>