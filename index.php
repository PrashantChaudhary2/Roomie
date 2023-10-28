<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roomie | Login</title>
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
      <!-- Google fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper" id="login">
        <div class="loginContainer">
            <div class="sectionOne col-6-m">
                <div class="formWrapper">
                    <div class="logo">
                        <img src="assets/logo.png" alt="Roomie logo">
                    </div>
                    <h1>Sign In</h1>

                    <form action="processLogin.php" method="post">
                        <div class="fieldset">
                            <input type="text" name="emailAddress" placeholder="Email Address" />
                        </div>
                        <div class="fieldset">
                            <input type="password" name="password" placeholder="Password" />
                        </div>
                        <div class="fieldset">
                            <input class="cta-primary" type="submit" value="Login Now"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="sectionTwo col-6-m">
                <div class="centerDiv">
                    <h2>Hello!</h2>
                    <p>Enter your personal details and find your perfect roomate!</p>
                    <a href="register.php" class="cta-secondary">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>