<form method="post">
   Username: <input type="text" name="user"><br>
   Password: <input type="password" name="pass"><br>
   <input type="submit" value="Login">
</form>

<?php
if(isset($_POST['user'])){
   if($_POST['user']=="admin" && $_POST['pass']=="12345")
      echo "Login Successful!";
   else
      echo "Invalid Credentials!";
}
?>