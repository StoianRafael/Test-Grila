<?php
// Include config file
session_start();
require_once "PHP/config.php"; 
$username=$_SESSION["username"];
   
        $sql = "UPDATE users SET  score='".$_COOKIE['score']."'  WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username =$username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } 
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
		// Close statement
        mysqli_stmt_close($stmt);
        }
    
    // Close connection
    mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<script src="quiz_controller.js"></script>
<script src="question.js"></script>
<script src="app.js"></script>

<div class="grid">
        <div id="quiz">
            <h1>Quiz</h1>
            <div class="username_div">
                    <input class= "username" type="text" value="<?php echo("{$_SESSION['username']}"); ?>" name="username" readonly=""/>
                    <button class="logout_button" onclick="window.location.href='logout.php'">Logout</button>
            </div>
            <hr style="margin-top: 20px">
            <p id="question" class="result"> Result</p>
            <input class= "username" type="text" value="<?php echo("{$_COOKIE['score']}"); ?>" name="username" readonly=""/>
            <hr style="margin-top: 50px">
            <footer>

            </footer>
        </div>
    </div>



</body>
</html>