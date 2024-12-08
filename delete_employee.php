<?php
include 'db.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM employees WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: employee.php?status=deleted");
        exit();
    } else {
        echo "Error deleting employee: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
