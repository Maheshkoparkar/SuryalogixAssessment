<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['employee_name'];
    $email = $_POST['email'];
    $position = $_POST['position'];

    // Update query
    $query = "UPDATE employees SET name = ?, email = ?, position = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssi", $name, $email, $position, $id);

    if ($stmt->execute()) {
        echo "Employee updated successfully.";
    } else {
        echo "Error updating employee: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
    header("Location: employee.php?status=updated");
    exit();
} else {
    $id = $_GET['id'];
    $query = "SELECT * FROM employees WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $employee = $result->fetch_assoc();

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Employee</h2>
        <form method="POST" action="edit_employee.php">
            <input type="hidden" name="id" value="<?= htmlspecialchars($employee['id']) ?>">
            <div class="mb-3">
                <label for="employee_name" class="form-label">Employee Name</label>
                <input type="text" class="form-control" id="employee_name" name="employee_name" value="<?= htmlspecialchars($employee['name']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($employee['email']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" name="position" value="<?= htmlspecialchars($employee['position']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Employee</button>
            <a href="employee.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
