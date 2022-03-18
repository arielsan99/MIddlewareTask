
<?php
    function conectar(){
        // $user='';
        // $pass='';
        // $server='localhost';
        // $db='testmastermysql';
        // $conexion=new mysqli($server,$user,$pass,$db) or die ("Error al conectar a la base de datos");
        //$conexion = new mysqli("6.tcp.ngrok,io:13530","root", "asd123", "user_db");
        $conexion = new mysqli("8.tcp.ngrok.io:18074","root", "asd123", "user_db");

        return $conexion;

    }
?>
