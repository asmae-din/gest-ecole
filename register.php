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
                <section class="registration-container">
                    <h1 class="header">Registration</h1>
                            <div class="header-underline"></div>
                            <div class="fields-container">
                                <div class="inputs-container">
                                    <label class="field-label" for="name">Full Name</label>
                                    <input  class="input-field" type="text" value="Enter your name" id="name" >
                                </div>
                                <div class="inputs-container">
                                    <label class="field-label" for="username">Username</label> 
                                    <input class="input-field"type="text" value="Enter your Username" id="username" > 
                                </div>
                                <div class="inputs-container">
                                    <label class="field-label" for="email">Email</label> 
                                    <input class="input-field" type="text" value="Enter your email" id="email" > 
                                </div>
                                <div class="inputs-container">
                                    <label class="field-label" for="phone-number">Phone Number</label> 
                                    <input  class="input-field" type="text" value="Enter your number" id="phone-number" > 
                                </div>
                                <div class="inputs-container">
                                    <label class="field-label" for="password">Password</label> 
                                    <input class="input-field" type="text" value="Enter your Password" id="password"> 
                                </div>
                                <div class="inputs-container">
                                    <label class="field-label" for="confi-password">Confirm Password</label>
                                    <input  class="input-field" type="text" value="Confirm your Password" id="confi-password"> 
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
                </section>
        </body>
</html>