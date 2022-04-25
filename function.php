<?php
    session_start();
    include_once("config.php");
    // authentification
  if (isset($_POST['email']) and isset($_POST['password'])) {
    $query=$cnx->prepare("SELECT * FROM etudiant WHERE email=? and password=?");
    $query->execute([$_POST['email'],$_POST['password']]);
    $user=$query->fetch();
      if ($user) {
        echo $msg="identification valid";

        $_SESSION["email"]=$user["email"];
        $_SESSION["password"]=$user["password"];
        header("location:profile.php?msg=$msg");
      } else {
        echo $msg="Identification invalid!";
        header("location:signin.php?msg=$msg");
      }

}

?>