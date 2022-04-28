<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Inscription</title>
            <link rel="stylesheet" href="./styles-regis.css"/>
        </head>
        <body>
                <form class="registration-container" method="POST" action="function.php" onsubmit="checkPw()">
                    <h1 class="header">Registration</h1>
                            <div class="header-underline"></div>
                            <div class="fields-container">
                                <div class="inputs-container">
                                    <label class="field-label" for="name">Nom et Prénom</label>
                                    <input  class="input-field" type="text" placeholder="Nom & Prenom" name="nom_prenom" >
                                </div>
                                <div class="inputs-container">
                                    <label class="field-label" for="username">Date de naissance</label> 
                                    <input class="input-field" type="text" placeholder="Date de naissance" name="date_naiss" > 
                                </div>
                                <div class="inputs-container">
                                    <label class="field-label" for="email">Email</label> 
                                    <input class="input-field" type="email" placeholder="Email" name="email" > 
                                </div>
                                <div class="inputs-container">
                                    <label class="field-label" for="phone-number">Tel:</label> 
                                    <input  class="input-field" type="tel" placeholder="Phone number" name="tel" > 
                                </div>
                                <div class="inputs-container">
                                    <label class="field-label" for="password">Password</label> 
                                    <input class="input-field" type="password" placeholder="Password" name="pass" id="pass"> 
                                </div>
                                <div class="inputs-container">
                                    <label class="field-label" for="confi-password">Confirm Password</label>
                                    <input  class="input-field" type="password" placeholder="Confirm your Password" name="confirm-password" id="confirm-pass"> 
                                </div>
                            
                                <div  class="inputs-container gender-fields">
                                    <label class="field-label">Gender</label>
                                        <div class="gender-inputs">
                                            <input type="radio">
                                            <label  class="gender-lbl">Male</label>
                                            <input type="radio">
                                            <label  class="gender-lbl">female</label>
                                            <input type="radio">
                                            <label  class="gender-lbl">Prefer not to say</label>
                                        </div>
                                </div> 
                                <button class="btn ">Register</button>
                            </div>
                </form>
                <script>
                                function checkPw() {
                                    alert("hi");
                                pw1 = document.getElementById("pass").value;
                                pw2 = document.getElementById("confirm-pass").value;
                                if (pw1 != pw2) {
                                alert("\erreur: les mots de passes ne correspondent pas")
                                return false;
                                }
                                else return true;
                                }
                            </script>
        </body>
</html>