<?php 
try{
    $con=new PDO("mysql:host=localhost;dbname=login","root","");
}
catch(PDOExection $e){
    echo $e->getMessage();
}


?>