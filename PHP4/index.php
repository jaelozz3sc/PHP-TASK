<?php 
require 'dbcontroller.php'; 

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
        $message = "<p style='color:green; text-align:center;'>Record added successfully!</p>";
    } else {
        $message = "<p style='color:red; text-align:center;'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Output 4 - DataTables</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; }
        .container { width: 80%; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        input, select, textarea { width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        input[type="submit"] { background: #28a745; color: white; border: none; cursor: pointer; padding: 10px; width: 100%; font-size: 16px;}
        .form-section { max-width: 500px; margin: auto; margin-bottom: 40px; }
    </style>
    

    <link rel="stylesheet" href="DataTables/datatables.min.css">
    <!-- jQuery (Required for DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="DataTables/datatables.min.js"></script>
</head>
<body>

<div class="container">
    <h1 style="text-align:center;">PHP Output #4</h1>
    <?php echo $message; ?>

    <div class="form-section">
        <h3>Add Person</h3>
        <form action="index.php" method="POST">
            <input type="text" name="fname" placeholder="First Name" required />
            <input type="text" name="mname" placeholder="Middle Name" required />
            <input type="text" name="lname" placeholder="Last Name" required />
            <input type="number" name="age" placeholder="Age" required />
            <select name="gender" required>
                <option value="">-- Select Gender --</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <input type="email" name="email" placeholder="Email" required />
            <textarea name="address" placeholder="Address" required></textarea>
            <input type="tel" name="contact" placeholder="Contact Number" required />
            <input type="submit" value="Save Record">
        </form>
    </div>

    <h2>Registered Persons</h2>
  
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Age</th><th>Gender</th><th>Email</th><th>Address</th><th>Contact</th>
            </tr>
        </thead>
        <tbody>
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
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

</body>
</html>