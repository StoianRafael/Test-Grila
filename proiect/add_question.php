
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="javascript/jquery.js"></script>
    <script src="javascript/add_question_action.js"></script>
</head>
<body>
<?php session_start();?>
    <div class="grid">
        <div id="quiz">
            <h1>Add Question</h1>
            <div class="username_div">
                    <input class= "username" type="text" value="<?php echo("{$_SESSION['username']}"); ?>" name="username" readonly=""/>
                    <button class="logout_button" onclick="window.location.href='logout.php'">Logout</button>
            </div>
            <hr style="margin-top: 20px"> 
            <div class="buttons">
                 <form class="add_question" id="add_question" action="post">
                    <div class="container_question">
                        <div style="width: 100%;margin: 20px 0;">
                        <label for="question"><b>Question</b></label>
                        <input type="text" placeholder="Enter Question" name="question" >
                        </div>
                        <div class="variants" style="width: 100%;margin: 20px 0;">
                        <label for="variant1"><b>Variants</b></label>
                        <input type="text" placeholder="Enter Variant" name="variant1">
                        <input type="text" placeholder="Enter Variant" name="variant2">
                        <input type="text" placeholder="Enter Variant" name="variant3">
                        <input type="text" placeholder="Enter Variant" name="variant4">
                        </div>
                        <div style="width: 100%;margin: 20px 0;">
                        <label for="answer"><b>Answer</b></label>
                        <input type="text" placeholder="Enter Answer" name="answer">
                        </div>
                    </div>
                    <hr style="margin-top: 20px">
                    <div class="clearfix_singup">
                         <button type="button" onclick="cancelbutton()" class="logout_button">Cancel</button>
                         <button type="submit" class="logout_button" onclick="addquestion()">Add</button>
                </div>
                </form>
            </div>
            <script>
                    function cancelbutton(){
                        document.getElementById('add_question').reset();
                        location.replace("http://localhost/proiect/index.php");
                    }
                </script>

            <footer>
               
            </footer>
        </div>
    </div>
</body>
</html>