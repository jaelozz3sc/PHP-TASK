<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $data = $_GET;
} else {
    $data = $_POST;
}


$errors = [];

if (empty($data['fname'])) {
    $errors[] = "First Name is required.";
}
if (empty($data['mname'])) {
    $errors[] = "Middle Name is required.";
}
if (empty($data['lname'])) {
    $errors[] = "Last Name is required.";
}
if (empty($data['age']) || !is_numeric($data['age']) || $data['age'] < 1 || $data['age'] > 120) {
    $errors[] = "Age must be a valid number between 1 and 120.";
}
if (empty($data['gender'])) {
    $errors[] = "Gender is required.";
}
if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "A valid email address is required.";
}
if (empty($data['address'])) {
    $errors[] = "Address is required.";
}
if (empty($data['contact'])) {
    $errors[] = "Contact Number is required.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Output 1 - Results</title>
    <style>
        body {
            font-family: "Arial";
        }
    </style>
</head>
<body>
    <h1>PHP Output No. 1 - Results</h1>

    <?php if (!empty($errors)): ?>
        <!-- Display Errors -->
        <fieldset>
            <legend>Validation Errors</legend>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </fieldset>
    <?php else: ?>
        <!-- Display Data -->
        <fieldset>
            <legend>Submitted Data</legend>
            <table>
                <tr>
                    <td>First Name</td>
                    <td><?php echo htmlspecialchars($data['fname']); ?></td>
                </tr>
                <tr>
                    <td>Middle Name</td>
                    <td><?php echo htmlspecialchars($data['mname']); ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo htmlspecialchars($data['lname']); ?></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><?php echo htmlspecialchars($data['age']); ?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?php echo htmlspecialchars($data['gender']); ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo htmlspecialchars($data['email']); ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo htmlspecialchars($data['address']); ?></td>
                </tr>
                <tr>
                    <td>Contact Number</td>
                    <td><?php echo htmlspecialchars($data['contact']); ?></td>
                </tr>
            </table>
        </fieldset>
    <?php endif; ?>

    <br>
    <a href="index.php">Go Back</a>

</body>
</html>