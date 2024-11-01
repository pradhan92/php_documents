<?php
// Include the User class for CRUD operations
include 'User.php';

$user = new User();

// Handle Create Operation
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user->create($name, $email);
}

// Handle Update Operation
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user->update($id, $name, $email);
}

// Handle Delete Operation
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $user->delete($id);
}

// Handle Edit (Get Data)
$editUser = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editUser = $user->getUserById($id);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP OOP CRUD</title>
</head>
<body>

<h2>Create User</h2>
<form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo isset($editUser) ? $editUser['id'] : ''; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo isset($editUser) ? $editUser['name'] : ''; ?>" required>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo isset($editUser) ? $editUser['email'] : ''; ?>" required>
    <button type="submit" name="<?php echo isset($editUser) ? 'update' : 'create'; ?>">
        <?php echo isset($editUser) ? 'Update' : 'Create'; ?>
    </button>
</form>

<h2>Users List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php
    $users = $user->read();
    foreach ($users as $user) {
        echo "<tr>
                <td>{$user['id']}</td>
                <td>{$user['name']}</td>
                <td>{$user['email']}</td>
                <td>
                    <a href='?edit={$user['id']}'>Edit</a>
                    <a href='?delete={$user['id']}'>Delete</a>
                </td>
              </tr>";
    }
    ?>
</table>

</body>
</html>
