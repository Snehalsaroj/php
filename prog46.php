<form method="post">
  User: <input type="text" name="u"><br>
  Email: <input type="email" name="e"><br>
  Pass: <input type="password" name="p"><br>
  <input type="submit" value="Register">
</form>

<?php
if(!empty($_POST['u']) && !empty($_POST['e']) && !empty($_POST['p'])){
 echo "Reg Success!<br>User: ".$_POST['u']."<br>Email: ".$_POST['e'];
} elseif($_POST){
 echo "All fields required!";
}
?>
