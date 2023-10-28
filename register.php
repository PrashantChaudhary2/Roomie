<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roomie | Sign up</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
      <!-- Google fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper" id="signup">
        <div class="signupContainer">
            <div class="sectionOne col-6-m">
                <div class="centerDiv">
                    <h2>Welcome Back!</h2>
                    <p>Login and find your perfect roomate!</p>
                    <a href="index.php" class="cta-secondary">Sign In</a>
                </div>
            </div>
            <div class="sectionTwo col-6-m">
                <div class="formWrapper">
                    <div class="logo">
                        <img src="assets/logo.png" alt="Roomie logo">
                    </div>
                    <h1>Sign Up</h1>
                    <?php
                        if(isset($_GET["error"])){ echo '<p class="error">email address already registered</p>';}
                    ?>
                    <form action="processRegister.php" method="post">
                        <div class="fieldset">
                            <input type="text" name="fullName" placeholder="Full Name" />
                        </div>
                        <div class="fieldset">
                            <input type="text" name="emailAddress" placeholder="Email Address" />
                        </div>
                        <div class="fieldset">
                            <input type="password" name="password" id="password" placeholder="Password" />
                        </div>
                        <div class="fieldset">
                            <input type="password"  name="confirmPassword" id="confirmpassword" placeholder="Confirm Password" />
                        </div>
                        <div class="fieldset">
                            <input type="submit" class="cta-primary" value="Register Now"/>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>