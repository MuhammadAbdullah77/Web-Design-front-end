<?php
include('connection.php');

if (isset($_POST['save'])) {
    $name = "";
    $email = "";
    $password = "";
    $conform_password = "";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conform_password = $_POST['conform_password'];
    if ($conform_password === $password) {
        $student_sql = "INSERT INTO reg(name, email, password) 
                VALUES ('$name', '$email', '$password')";
        if (mysqli_query($conn, $student_sql)) {
            $student_id = mysqli_insert_id($conn);
            echo "New student record created successfully<br>";
            header('Location: sign.php');
        } else {
            echo "Error: " . $student_sql . "<br>" . mysqli_error($conn);
        }
    }
}
if (isset($_POST['submits'])) {
    $name1 = "";
    $email1 = "";
    $age = "";
    $marks = "";
    $course_name = "";
    $credit_hours = "";
    $department_id = "";
    $name1 = $_POST['name1'];
    $email1 = $_POST['email1'];
    $age = $_POST['age'];
    $marks = $_POST['marks'];
    $course_name = $_POST['course_name'];
    $credit_hours = $_POST['credit_hours'];
    $department_id = $_POST['department_id'];
    $student_sql = "INSERT INTO info (name1, email1, age, marks,course_name, credit_hours, department_id) 
    VALUES ('$name1', '$email1', '$age', '$marks','$course_name', '$credit_hours', '$department_id')";

    if (mysqli_query($conn, $student_sql)) {
        $student_id = mysqli_insert_id($conn);
        echo "New student record created successfully<br>";
        header('Location: student.php');
    } else {
        echo "Error: " . $student_sql . "<br>" . mysqli_error($conn);
    }
}
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $qry = 'SELECT * FROM reg WHERE email = "' . $email . '" AND password = "' . $password . '"';
    $result = mysqli_query($conn, $qry);
    $data = mysqli_fetch_assoc($result);
    if (!empty($data)) {
        header('Location: student.php');
    } else {
        echo 'data does not match';
    }
}
