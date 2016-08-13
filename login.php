<!DOCTYPE html>
<html>
<head>

<style>
    span{
        background-color: lawngreen;
    }
</style>

</head>
<body>



</body>
</html>

<?php
include ("connection.php");
session_start();




if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Username and password sent from form
    // To protect MySQL injection for Security purpose


    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    $username = stripslashes($username);
    $password = stripslashes($password);

    $sql = "SELECT uid
            FROM users
            WHERE username = '$username'
            and
            password = '$password'";

    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);
    // If result matched $username and $password, table row must be 1 row
       if($count == 1) {
       //error check here...........
         $_SESSION['login_user'] = $username;

         echo $_SESSION['login_user'];
      //  header("location: Home.php?username=$username");
        header("location: Home.php");// Redirecting To another Page

        }else {
           $error =  "<span style='color: darkred'> Username or Password Incorrect. Try Again! </span>";

        header("location: index.php?error=$error");


        echo $error;

    }

}
mysqli_close($db);


