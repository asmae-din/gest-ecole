<?php
   try{
        $host = "localhost";
        $data = "gestion_ecole";
        $usr  = "root";
        $pwd  = "";
        $pdo=new PDO("mysql:host=$host;dbname=$data",$usr,$pwd);
        //echo "bien connecté";
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>