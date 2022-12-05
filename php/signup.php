<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body>
    <section class='sign-up-wrapper'>
        <div class="sign-up">
            <div class="close-btn">
                <a href="../index.php">
                    <img src="../img/close.svg" alt="close button">
                </a>
            </div>
            <h2 class='welcome-title'>Create an account</h2>
            <p class="welcome-txt">Create an account and stay with us for longer.</p>
            <form action="add_user.php" method="POST" class='sign-up-form'>
                <label for="username">
                    <input type="username" name="username" placeholder="Enter your username"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your username'" />
                </label>
                <label for="email">
                    <input type="email" name="email" placeholder="Enter your email" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter your email'" />
                </label>
                <label for="password">
                    <input type="password" name="password" placeholder="Enter your password"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" />
                </label>
                <button class='sign-up-btn'>Sign up</button>
            </form>
        </div>
    </section>
</body>

</html>