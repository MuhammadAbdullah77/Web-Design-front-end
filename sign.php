<?php include('connection.php'); ?>
<?php include('./process.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="style_p2.css">
</head>

<body>
    <form action="" method="post">
        <nav class="bar">
            <div class="navdie">
                <div class="logo">Web development</div>
                <div>
                    <ul>
                        <li><a href="design.php">HOME</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="#">INFO</a></li>
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
                <input type="text" name="name" placeholder="Username" required>
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <input type="password" name="conform_password" placeholder="Conform Password" required>
            </div>
            <div>
                <button class="login" type="submit" name="save">Register</button>
            </div>
        </div>
    </form>
</body>

</html>