<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>DevCollab Sign-in</title>
    <link rel="stylesheet" href="mainloginstylesheet.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src ="js/jquery.js"> </script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
<header>
    <div id ="logo">
        <a class="navbar-brand" href="Home.php"> <em style="font-family: cursive"> DevCollab  </em> </a>
    </div>
</header>

<div class="container">


<h2 style="color: ghostwhite" align="center"> FRIENDSHIPLINK APP - ADMIN LOGIN </h2>
<div class="login-page">
    <div class="form">
        <form method="post" action="login.php" >
            <label style="color: darkorange"> <strong>USERNAME </strong> </label> <input type="text" name="username" placeholder="username" />
            <br>
            <label style="color: darkorange"> <strong>PASSWORD </strong> </label> <input type="password" name="password" placeholder="password"  />

            <br>
            <br>
            <div class="submit">
                <button type="submit" name="submit" value="login" style="color: darkorange"> <Strong> LOGIN </Strong> </button>
                <br>
                <br>
            </div>
        </form>
    </div>
</div>
</div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>

</body>
</html>


