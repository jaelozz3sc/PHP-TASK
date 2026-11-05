<?php 
require 'layout/head.php'; 

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "<p class='error'>Please enter a valid email address.</p>";
    } elseif (empty($password) || strlen($password) < 5) {
        $message = "<p class='error'>Password must be at least 5 characters long.</p>";
    } elseif ($password !== $confirm_password) {
        $message = "<p class='error'>Passwords do not match.</p>";
    } else {
        // Redirect to login page
        header("Location: login.php?registered=1");
        exit;
    }
}
?>

<h1>Register</h1>
<?php echo $message; ?>

<form action="register.php" method="POST">
    <table>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" required /></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" required /></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="confirm_password" required /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Register"></td>
        </tr>
    </table>
</form>

<?php 
require 'layout/foot.php'; 
?>