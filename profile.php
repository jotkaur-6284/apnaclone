<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data safely
    $name = $_POST["name"] ?? '';
    $dob = $_POST["dob"] ?? '';
    $gender = $_POST["gender"] ?? '';
    $email = $_POST["email"] ?? null;

    // Prepare and execute query
    $stmt = $conn->prepare("INSERT INTO basic_details (name, dob, gender, email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $dob, $gender, $email);

    if ($stmt->execute()) {
        echo "<script>
    alert('Data inserted successfully!');
    window.location.href = 'index.html';
</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');
            window.location.href = 'index.html';
</script>";    }

    $stmt->close();
}

$conn->close();
?>
