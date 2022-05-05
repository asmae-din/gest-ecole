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
        $nomErr= $dateErr=$emailErr=$telErr=$passErr=$confipassErr=$genderErr=null;
        $nom_prenom=$date_naiss=$email= $tel= $pw= $confPw=$genre=null;
        $flag = true;
        $_SESSION["nom_complet"] = $nom_prenom;
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["nom_prenom"])) {
            $_SESSION['nomErr'] = "First name is required";
            $flag = false;
          } else {
            $nom_prenom= test_input($_POST["nom_prenom"]);
          }
          if (empty($_POST["date_naiss"])) {
            $dateErr="birthday is required";
            $flag = false;
          } else {
            $date_naiss = test_input($_POST["date_naiss"]);
          }
          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $flag = false;
          }else{
            $email =test_input($_POST["email"]);
          }
          if (empty($_POST["tel"])) {
            $telErr = "Phone is required";
            $flag = false;
          }else{
            $tel =test_input( $_POST["tel"]);
          }
          if (empty( $pw=$_POST["pass"])) {
            $passErr="Password is required";
            $flag = false;
          } else {
            $pw=test_input($_POST["pass"]);
          }
          if (empty($_POST["confiPass"])) {
            $confipassErr="Please confirm your password";
            $flag = false;
          } else {
            $confPw=test_input($_POST["confiPass"]);
          }
          if (empty($_POST["gender"])) {
            $genderErr="Select your gender please";
            $flag = false;
          } else {
            $genre=test_input($_POST["gender"]);
          }
        }
        if ($flag) {

        $stmt = $cnx->prepare("INSERT INTO etudiant (nom_prenom, date_naiss, genre, email, tel, password)
        VALUES ('$nom_prenom','$date_naiss','$genre','$email','$tel','$pw')");
        
        $stmt->execute();
        echo $msg="Bienvenu";
        header("location:./profile.php?msg=$msg");
        }
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      $cnx = null;
    

      function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>

<!-- if($_POST["pass"]===$_POST["confiPass"]){
          $_SESSION['error'] = 'les mots de passes sont identique';
        }else{
          $_SESSION['error'] = 'les mots de passes ne correspondent pas';
          // header("location:register.php");
        }

        if(!isset($_POST["nom_prenom"]) || trim($_POST["nom_prenom"])=="" ||
        !isset($_POST["date_naiss"]) || trim($_POST["date_naiss"])=="" ||
        !isset($_POST["gender"]) || trim($_POST["gender"])==""||
        !isset($_POST["email"]) || trim($_POST["email"])=="" || 
        !isset($_POST["tel"]) || trim($_POST["tel"])=="" ||
        !isset($_POST["pass"]) || trim($_POST["pass"])=="" ||
        !isset($_POST["confiPass"]) || trim($_POST["confiPass"])==""){
         
          $_SESSION['error'] = 'Champs Obligatoire !';
          header("location:./register.php");
          
        }else{
          $stmt->execute();
          echo $msg="Bienvenu";
          header("location:./profile.php?msg=$msg");
        }
        ?> -->