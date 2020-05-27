<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="javascript/jquery.js"></script>
    <script src="javascript/login_action.js"></script>
</head>
<body>
     <?php
     session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["administrator"] === 'administrator'){
               include 'index_administrator.php'; 
            }else
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["administrator"] === 'user'){
               include 'index_user.php';
              }else{
                  include 'login.php';
              }
     ?>

</body>
</html>