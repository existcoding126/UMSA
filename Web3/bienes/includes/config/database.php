<?php
function conectarDB(){
    $db=mysqli_connect("localhost","root","","bienes");
    
    return $db;
}
?> 
