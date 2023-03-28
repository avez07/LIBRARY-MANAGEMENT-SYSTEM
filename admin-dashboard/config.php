<?php
 $servername = 'localhost';
 $user = 'root';
 $password = '';
 
 $conn = new mysqli($servername , $user , $password);
 
 if($conn -> connect_error){
     die('error in connection'+$conn -> connect_error);
 }else{
    //  echo('connect susessfull');
 };
 $conn -> query('use huristic');
?>