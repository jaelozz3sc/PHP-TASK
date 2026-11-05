<?php 
require 'layout/head.php'; 

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "<p class='error'>Please enter a valid email address.</p>";
    } else {
        $message = "<p class='success'>If an account exists for " . htmlspecialchars($email) . ", a reset link has been sent.</p>";
    }
}
?>

<h1>Forgot Password</h1>
<?php echo $message; ?>

<p style="text-align:center;">Enter your email address below to reset your password.</p>
<form action="forgot.php" method="POST">
    <table>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" required /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Reset Password"></td>
        </tr>
    </table>
</form>

<?php 
require 'layout/foot.php'; 
?>