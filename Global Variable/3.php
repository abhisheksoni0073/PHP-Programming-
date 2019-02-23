<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name"> <br> <br>
  Email <input type="email" name="email">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name']; 
    $email =$_POST['email'];
    if (empty($name) || empty($email)) {
        echo "Name is empty";
    } else {
        echo $name."<br>".$email;

    }
}
?>

</body>
</html>