<?php include('connection.php'); ?>
<?php //     include('./process.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 2</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <form action="./process.php" method="post">
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
            <div class="h">
                <h2>Welcome to student registration</h2>
            </div>
            <div>
                <input type="text" name="name1" placeholder="Student Name" required>
            </div>
            <div>
                <input type="email" name="email1" placeholder="Email" required>
            </div>
            <div>
                <input type="number" name="age" placeholder="Age" required>
            </div>
            <div>
                <input type="number" name="marks" placeholder="FSC Marks" required>
            </div>
            <h2>Enter course Information</h2>
            <div>
                <input type="text" name="course_name" placeholder="Course Name" required>
            </div>
            <div>
                <input type="number" name="credit_hours" placeholder="Credit Hours" required>
            </div>
            <div>
                <input type="number" name="department_id" placeholder="Department ID" required>
            </div>
            <div>
                <button class="login" type="submit" name="submits">Save</button>
            </div>
            <div>
                <button class="login" type="submit" name="submits">reset</button>
            </div>
        </div>

    </form>

</body>

</html>