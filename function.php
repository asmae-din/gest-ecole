<?php
    session_start();
    include_once("config.php");
    

    /* Page authentification */
    if (isset($_POST['email']) and isset($_POST['password'])){
        $query = $cnx->prepare("SELECT * FROM etudiant WHERE email = ? and password = ?");
        $query->execute([$_POST['email'], $_POST['password']]);
        $user = $query->fetch();
        if ($user)
        {
          
            echo $msg = "Identifiant valid!";
            $_SESSION["email"] = $user['email'];
            $_SESSION["pass"] = $user['password'];
            $_SESSION["nom_complet"] = $user['nom_prenom'];

            header("location:./profile.php?msg=$msg");
        } else {
            echo $msg = "Identifiant invalid!";
            header("location:./signin.php?msg=$msg");
        }
    }
    if($user){
      try {

        // set the PDO error mode to exception
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          // prepare sql and bind parameters
        $nom_prenom= $_POST["nom_prenom"];
        $date_naiss = $_POST["date_naiss"];
        $genre=$_POST["gender"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $pw=$_POST["pass"];
        $_SESSION["nom_complet"] = $nom_prenom;
        $stmt = $cnx->prepare("INSERT INTO etudiant (nom_prenom, date_naiss, genre, email, tel, password)
        VALUES ('$nom_prenom','$date_naiss','$genre','$email','$tel','$pw')");
        $stmt->execute();

        
        echo "New records created successfully";
        header("location:./profile.php?msg=$msg");
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      $cnx = null;
    }else{
      

}

?>