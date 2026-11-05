<?php 
require 'layout/head.php'; 
?>

<h1>Welcome to the Home Page</h1>

<?php if(isset($_SESSION['user_email'])): ?>
    <p class="success">You are logged in as: <strong><?php echo $_SESSION['user_email']; ?></strong></p>
<?php else: ?>
    <p style="text-align:center;">You are not logged in. Please <a href="login.php">Login</a> or <a href="register.php">Register</a>.</p>
<?php endif; ?>

<p style="text-align:center;">This is the main home page for PHP Output #2.</p>

<?php 
require 'layout/foot.php'; 
?>