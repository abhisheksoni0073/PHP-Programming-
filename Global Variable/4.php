<!DOCTYPE html>
<html>
<body>

<form method="get">
  Name: <input type="text" name="name"> <br> <br>
  Email <input type="email" name="email">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $name = $_GET['name']; 
    $email =$_GET['email'];
    if (empty($name) || empty($email)) {
        echo "Name is empty";
    } else {
        echo $name."<br>".$email;

    }
}
?>

</body>
</html>