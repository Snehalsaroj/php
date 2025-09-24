<html>
<head></head>
<body>
<form method="POST" action="prog39.php">
    Enter Name: <input type="text" name="username">
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['username'])){
    $name = $_POST['username'];
    echo "Welcome, $name!";
} else {
    echo "Please enter your name in form.";
}
?>
</body>
</html>