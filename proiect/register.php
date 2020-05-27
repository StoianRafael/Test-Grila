<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="javascript/jquery.js"></script>
    <script src="javascript/register_action.js"></script>
</head>
<body>
<?php session_start();?>
    <div class="grid">
        <div id="quiz">
            <h1>Register</h1>
            <hr style="margin-top: 20px">
            <div class="buttons">
                 <form class="register" id="register" action="post">
                    <div class="container_login">
                        <div style="width: 100%;margin: 30px 0;">
                        <label for="email"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" >
                        </div>
                        <div style="width: 100%;margin: 30px 0;">
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password">
                        </div>        
                        <div style="width: 100%;margin: 30px 0;">                  
                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="confirm_password">
                        </div>
                    </div>
                    <hr style="margin-top: 20px">
                    <div class="clearfix_singup">
                         <button type="button" onclick="cancelbutton()" class="logout_button">Cancel</button>
                         <button type="submit" class="logout_button" onclick="register()">Sign Up</button>
                </div>
                </form>
            </div>
            <script>
                    function cancelbutton(){
                        document.getElementById('register').reset();
                        location.replace("http://localhost/proiect/index.php");
                    }
                </script>

            <footer>
               
            </footer>
        </div>
    </div>
</body>
</html>