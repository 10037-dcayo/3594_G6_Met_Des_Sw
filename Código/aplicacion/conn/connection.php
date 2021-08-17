<?php
try{
$conn = new PDO('mysql:host=localhost; dbname=centroescolarbd', 'root', 'Sistemas12');
} catch(PDOException $e){
   echo "Error: ". $e->getMessage();
   die();
}
?>