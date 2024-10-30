<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $conn = new mysqli('localhost', 'username', 'password', 'test');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $email = $_POST['email'];
    $query_type = $_POST['query_type'];
    $is_distributor = isset($_POST['is_distributor']) ? 1 : 0;
    $is_teacher = isset($_POST['is_teacher']) ? 1 : 0;
    $is_student = isset($_POST['is_student']) ? 1 : 0;
    $about = $_POST['about'];
    $concern = $_POST['concern'];

    // Insert data into database
    $stmt = $conn->prepare("INSERT INTO form_data (email, query_type, is_distributor, is_teacher, is_student, about, concern) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiiiss", $email, $query_type, $is_distributor, $is_teacher, $is_student, $about, $concern);

    if ($stmt->execute()) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
