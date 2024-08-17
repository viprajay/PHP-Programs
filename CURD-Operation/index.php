<?php
session_start();

// Initialize the session variable to hold the users array
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

// Create Operation
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $newUser = [
        'id' => count($_SESSION['users']) + 1,
        'name' => $name,
        'email' => $email
    ];

    $_SESSION['users'][] = $newUser;

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Update Operation
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    foreach ($_SESSION['users'] as &$user) {
        if ($user['id'] == $id) {
            $user['name'] = $name;
            $user['email'] = $email;
            break;
        }
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Delete Operation
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    foreach ($_SESSION['users'] as $key => $user) {
        if ($user['id'] == $id) {
            unset($_SESSION['users'][$key]);
            $_SESSION['users'] = array_values($_SESSION['users']); // Reindex array
            break;
        }
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Operation</title>
</head>
<body style="background-color:#606060;color:white">

<center>

<h1>Create User</h1>
<form method="POST">
    <input style="width:250px;height:30px" type="text" name="name" placeholder="Name" required>
    <input style="width:250px;height:30px" type="email" name="email" placeholder="Email" required>
    <button style="width:70px;height:35.5px;background-color:green;color:white" type="submit" name="create">Create</button>
</form>

<h1>Users List</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($_SESSION['users'] as $user): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['name'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>
            <form method="POST" style="display:inline-block;">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <input type="text" name="name" value="<?= $user['name'] ?>" required>
                <input type="email" name="email" value="<?= $user['email'] ?>" required>
                <button style="color:black;background-color:yellow" type="submit" name="update">Update</button>
            </form>
            <button style="background-color:red">
            <a style="color:white"  href="?delete=<?= $user['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </button>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</center>
</body>
</html>
