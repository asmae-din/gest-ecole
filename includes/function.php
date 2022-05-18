<?php
    session_start();
    include_once("config.php");
    $action=$_POST["action"];
    if($action==="signin"){
       // /* Page authentification */
    if (isset($_POST['email']) and isset($_POST['pass'])){
      $query = $pdo->prepare("SELECT * FROM etudiant WHERE email = ? and password = ?");
      $query->execute([$_POST['email'], $_POST['pass']]);
      $user = $query->fetch();
      if ($user)
      {
          echo $msg = "Bienvenu";
          $_SESSION["nom_complet"] = $user['nom_prenom'];
          $_SESSION["email"] = $user['email'];
          $_SESSION["pass"] = $user['password'];

          header("location:../profil.php?msg=$msg");
      } else {
          echo $msg = "Identifiant invalid!";
          header("location:../signin.php?msg=$msg");
      }
  }
    }elseif($action==="inscri"){
      try {
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          // prepare sql and bind parameters
        $nom_prenom= $_POST["nom_prenom"];
        $date_naiss = $_POST["date_naiss"];
        $genre=$_POST["gender"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $pw=$_POST["pass"];
        $_SESSION["nom_complet"] = $nom_prenom;
        $stmt = $pdo->prepare("INSERT INTO etudiant (nom_prenom, date_naiss, genre, email, tel,password)
        VALUES ('$nom_prenom','$date_naiss','$genre','$email','$tel','pass')");
        $stmt->execute();
        $msg="Bienvenu";
        header("location:../profil.php?msg=$msg");
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      $cnx = null;
    }elseif($action==="update"){
      
      $query="SELECT * FROM etudiant WHERE email =? and password = ?";
      try {
        $stmt=$pdo->query($query);
        if($stmt===false){
          die("erreur");
        }
      } catch (\PDOException $e) {
        echo $e->getMessage();
      }

    } 
  
?>