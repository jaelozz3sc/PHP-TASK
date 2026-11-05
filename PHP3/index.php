<?php require 'layout/head.php'; ?>

<h1>PHP Output #3 - Form</h1>
<form action="redirect.php" method="POST">
    <table>
        <tr><td>First Name:</td><td><input type="text" name="fname" required /></td></tr>
        <tr><td>Middle Name:</td><td><input type="text" name="mname" required /></td></tr>
        <tr><td>Last Name:</td><td><input type="text" name="lname" required /></td></tr>
        <tr><td>Age:</td><td><input type="number" name="age" required /></td></tr>
        <tr><td>Gender:</td><td>
            <select name="gender" required>
                <option value="">-- Select --</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </td></tr>
        <tr><td>Email:</td><td><input type="email" name="email" required /></td></tr>
        <tr><td>Address:</td><td><textarea name="address" required></textarea></td></tr>
        <tr><td>Contact:</td><td><input type="tel" name="contact" required /></td></tr>
        <tr><td colspan="2"><input type="submit" value="Submit Data"></td></tr>
    </table>
</form>

<?php require 'layout/foot.php'; ?>