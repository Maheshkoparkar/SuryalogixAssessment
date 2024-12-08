<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employee_name = $_POST['employee_name'];
    $email = $_POST['email'];
    $position = $_POST['position'];

    $query = "INSERT INTO employees (name, email, position) VALUES ('$employee_name', '$email', '$position')";
    $conn->query($query);

    header('Location: employee.php?status=added');
    exit();
}
?>
