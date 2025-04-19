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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $full_name = $_POST["full_name"];
  $work_email = $_POST["work_email"];
  $mobile_number = $_POST["mobile_number"];
  $your_role = $_POST["your_role"];
  $company_name = $_POST["company_name"];
  $company_size = $_POST["company_size"];

  // Prepare and bind the SQL statement
  $stmt = $conn->prepare("INSERT INTO contact_details (full_name, work_email, mobile_number, your_role, company_name, company_size) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssss", $full_name, $work_email, $mobile_number, $your_role, $company_name, $company_size);


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
