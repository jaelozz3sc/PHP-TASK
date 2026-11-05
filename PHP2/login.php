<?php 
require 'layout/head.php'; 

$message = "";
if (isset($_GET['registered'])) {
    $message = "<p class='success'>Registration successful! Please login.</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Hardcoded login for Output #2
    if ($email === "admin@example.com" && $password === "password123") {
        $_SESSION['user_email'] = $email;
        header("Location: index.php");
        exit;
    } else {
        $message = "<p class='error'>Invalid email or password. (Try: admin@example.com / password123)</p>";
    }
}
?>

<h1>Login</h1>
<?php echo $message; ?>

<form action="login.php" method="POST">
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
            <td colspan="2"><input type="submit" value="Login"></td>
        </tr>
    </table>
</form>

<?php 
require 'layout/foot.php'; 
?>