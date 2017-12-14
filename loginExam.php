<?php
/**
 * Created by PhpStorm.
 * User: Rasmus laptop
 * Date: 14/12/2017
 * Time: 09:44
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>login page</title>
    <!-- Always consider whether bootstrap is the best choice, it's technically made for twitter -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>
<form action="index.php" method="post">
    <input class="form-control" type="text" name="Username" placeholder="Username">
    <input class="form-control" type="text" name="Password" placeholder="Password">
    <button class="btn btn-success" type="Submit">Login</button>
</form>
</body>
</html>
