<?php

function Conectar(){
    $link=new mysqli("localhost","root","","examen_gualpat") or die("Error al conectar a la B.D");
   // $link->set_charset("utf-8");
    return $link;
    
}
$mysli=Conectar(); 

?>
