<?php require 'views/header.php'; ?>

<h1>Edit Faculty</h1>
<form action="index.php?action=edit&id=<?= $faculty['id'] ?>" method="POST">
    <div class="form-group"><label>First Name:</label><input type="text" name="fname" value="<?= htmlspecialchars($faculty['first_name']) ?>" required></div>
    <div class="form-group"><label>Middle Name:</label><input type="text" name="mname" value="<?= htmlspecialchars($faculty['middle_name']) ?>" required></div>
    <div class="form-group"><label>Last Name:</label><input type="text" name="lname" value="<?= htmlspecialchars($faculty['last_name']) ?>" required></div>
    <div class="form-group"><label>Age:</label><input type="number" name="age" value="<?= $faculty['age'] ?>" required></div>
    <div class="form-group">
        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male" <?= $faculty['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= $faculty['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
        </select>
    </div>
    <div class="form-group"><label>Address:</label><textarea name="address" required><?= htmlspecialchars($faculty['address']) ?></textarea></div>
    <div class="form-group"><label>Position:</label><input type="text" name="position" value="<?= htmlspecialchars($faculty['position']) ?>" required></div>
    <div class="form-group"><label>Salary:</label><input type="number" step="0.01" name="salary" value="<?= $faculty['salary'] ?>" required></div>
    
    <div style="text-align: right; margin-top: 20px;">
        <a href="index.php?action=index" class="btn">Cancel</a>
        <input type="submit" class="btn btn-success" value="Update Faculty">
    </div>
</form>

<?php require 'views/footer.php'; ?>