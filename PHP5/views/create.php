<?php require 'views/header.php'; ?>

<h1>Add New Faculty</h1>
<form action="index.php?action=create" method="POST">
    <div class="form-group"><label>First Name:</label><input type="text" name="fname" required></div>
    <div class="form-group"><label>Middle Name:</label><input type="text" name="mname" required></div>
    <div class="form-group"><label>Last Name:</label><input type="text" name="lname" required></div>
    <div class="form-group"><label>Age:</label><input type="number" name="age" min="1" max="120" required></div>
    <div class="form-group">
        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>
    <div class="form-group"><label>Address:</label><textarea name="address" required></textarea></div>
    <div class="form-group"><label>Position:</label><input type="text" name="position" required></div>
    <div class="form-group"><label>Salary:</label><input type="number" step="0.01" name="salary" required></div>
    
    <div style="text-align: right; margin-top: 20px;">
        <a href="index.php?action=index" class="btn">Cancel</a>
        <input type="submit" class="btn btn-success" value="Save Faculty">
    </div>
</form>

<?php require 'views/footer.php'; ?>