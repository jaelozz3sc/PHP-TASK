<?php require 'views/header.php'; ?>

<h1>Faculty List</h1>
<a href="index.php?action=create" class="btn btn-success" style="margin-bottom: 15px;">+ Add New Faculty</a>

<table>
    <thead>
        <tr>
            <th>ID</th><th>Name</th><th>Age</th><th>Gender</th><th>Position</th><th>Salary</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($faculties as $f): ?>
        <tr>
            <td><?= $f['id'] ?></td>
            <td><?= htmlspecialchars($f['first_name'] . ' ' . $f['last_name']) ?></td>
            <td><?= $f['age'] ?></td>
            <td><?= $f['gender'] ?></td>
            <td><?= htmlspecialchars($f['position']) ?></td>
            <td>$<?= number_format($f['salary'], 2) ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $f['id'] ?>" class="btn">Edit</a>
                <a href="index.php?action=delete&id=<?= $f['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require 'views/footer.php'; ?>