<?php include('connection.php'); ?>
<?php //     include('./process.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 2</title>
    <link rel="stylesheet" href="style_p2.css">
</head>

<body>
    <form action="./process.php" method="post">
        <nav class="bar">
            <div class="navdie">
                <div class="logo">Web development</div>
                <div>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="info.php">INFO</a></li>
                        <li><a href="#">ABOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div>
                <h2>LOGIN HERE</h2>
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div>
                <div>
                    <div>
                        <button class="login" type="submit" name="submit">Login</button>
                    </div>
                </div>
                <p>Don't have an account?</p><a href="sign.php" class="sign-up">Sign up</a>
            </div>
        </div>
        <article class="ar">
            <div>
                <p>
                    A Web Design Agency from pakistan that
                    Always Delivers
                </p>
            </div>
        </article>
    </form>

</body>

</html>