<?php 
	error_reporting(0);
	session_start();
	session_destroy();
	echo $_SESSION['loginMessage'];
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn Page</title>
    <link rel="stylesheet" href="../css/signin.css">
</head>

<body>
    <section class='sign-in-wrapper'>
        <div class="sign-in">
            <div class="close-btn">
                <a href="../index.php">
                    <img src="../img/close.svg" alt="close button">
                </a>
            </div>
            <h2 class='welcome-title'>Welcome back</h2>
            <p class="welcome-txt">Welcome back! Please enter your details.</p>
            <form action="login_check.php" method="POST" class='sign-in-form'>
                <label for=" email">
                    <input type="email" name="email" placeholder="Enter your email" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter your email'" />
                </label>
                <label for="password">
                    <input type="password" name="password" placeholder="Enter your password"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" />
                </label>
                <button class='sign-in-btn' type="submit" name="submit">Sign in</button>
            </form>
        </div>
    </section>
</body>

</html>