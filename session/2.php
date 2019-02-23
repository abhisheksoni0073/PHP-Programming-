 <?php

session_start();

if(!isset($_SESSION['luser']))

{
    echo "<p align='center'>Please Login again ";

    echo "<a href='index.php'>Click Here to Login</a></p>";

}

else

{

    $now = time();
 // checking the time now when home page starts

    if($now > $_SESSION['expire'])

    {

        session_destroy();

        echo "<p align='center'>Your session has expire ! <a href='1.php'>Login Here</a></p>";

    }

    else

    {
 //starting this else one [else1]

?>



<html>

<head>

	<title>Session</title>

</head>

<body>

<p style="background:#CCCCCC">

		Welcome <?php echo $_SESSION['luser']; ?> 

        <span style="float:right"><a href='3.php'>LogOut</a></span>

  <p style="padding-top:20px;background:#CCCCCC; height:400px; text-align:center">

  	<span style="color:red;text-align:center">MSS CYBER SECURITY</span>

  <br/><br/>

  <span>Message </span>

  </p>   

</p>

<?php

 }

}

?>

</body>

</html>