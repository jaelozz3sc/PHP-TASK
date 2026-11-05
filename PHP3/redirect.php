<?php 
require 'layout/head.php'; 


$host = "localhost"; $user = "root"; $pass = ""; $dbname = "task_db";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $conn->real_escape_string($_POST['fname']);
    $mname = $conn->real_escape_string($_POST['mname']);
    $lname = $conn->real_escape_string($_POST['lname']);
    $age = (int)$_POST['age'];
    $gender = $conn->real_escape_string($_POST['gender']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $contact = $conn->real_escape_string($_POST['contact']);

    $sql = "INSERT INTO persons (first_name, middle_name, last_name, age, gender, email, address, contact) 
            VALUES ('$fname', '$mname', '$lname', $age, '$gender', '$email', '$address', '$contact')";
    
    if ($conn->query($sql) === TRUE) {
        $message = "<p class='success'>Record added successfully!</p>";
    } else {
        $message = "<p class='error'>Error: " . $conn->error . "</p>";
    }
}
?>

<h1>PHP Output #3 - Registered Persons</h1>
<?php echo $message; ?>


<table>
    <tr>
        <th>ID</th><th>Name</th><th>Age</th><th>Gender</th><th>Email</th><th>Address</th><th>Contact</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM persons ORDER BY id DESC");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['address']) . "</td>";
            echo "<td>" . htmlspecialchars($row['contact']) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7' style='text-align:center;'>No records found.</td></tr>";
    }
    ?>
</table>

<br><a href="index.php">Go back to Form</a>
<?php require 'layout/foot.php'; ?>