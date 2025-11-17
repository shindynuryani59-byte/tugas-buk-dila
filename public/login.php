<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = $_POST['username'];
    $p = $_POST['password'];

    // no database → login selalu berhasil
    $_SESSION['username'] = $u;
    header("Location: index.php");
    exit;
}
?>

<h2>Login</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>
