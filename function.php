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

  try {
    // set the PDO error mode to exception
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // prepare sql and bind parameters
    $stmt = $cnx->prepare("INSERT INTO etudiant (nom_prenom, date_naiss, email, tel, password, confirm_password)
    VALUES (:nom_prenom, :date_naiss, :email, :tel :password)");
    $stmt->bindParam(':nom_prenom', $nom_prenom);
    $stmt->bindParam(':date_naiss', $date_naiss);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':tel', $tel);


    $nom_prenom= $_POST["nom_prenom"];
    $date_naiss = $_POST["date_naiss"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $stmt->execute();
  
    echo "New records created successfully";
    header("location:./profile.php?msg=$msg");
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

 
function checkPw(form) {
pw1 = form.passe.value;
pw2 = form.passe2.value;

if (pw1 != pw2) {
alert ("\erreur: les mots de passes ne correspondent pas")
return false;
}
else return true;
}


?>