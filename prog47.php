<?php
if (isset($_COOKIE['username'])) {
    $name = $_COOKIE['username'];
    echo "Welcome back, $name!";
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        setcookie("username", $name, time() + (86400 * 365), "/");
        echo "Hello, $name! Your name is saved.";
    } else {
        ?>
        <form method="post" action="">
            <label>Enter your name:</label>
            <input type="text" name="name" required>
            <input type="submit" value="Submit">
        </form>
        <?php
    }
}
?>
