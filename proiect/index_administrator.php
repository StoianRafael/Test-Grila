<?php include 'PHP/show_question_php.php' ; ?>
<div class="grid">
        <div id="quiz">
            <h1>Quiz</h1>
            <div class="username_div">
                    <input class= "username" type="text" value="<?php echo("{$_SESSION['username']}");?>" name="username" readonly=""/>
                    <button class="logout_button" onclick="window.location.href='logout.php'">Logout</button>
            </div>
            <hr style="margin-top: 20px"> 
             <button class="add_buttons" onclick="addquestion()">Add new quiz</button>  
                <script>
                    function addquestion(){
                        location.replace("http://localhost/proiect/add_question.php");
                    }
                </script> 
            <p id="question"></p>
            <div class="buttons">
                <button id="btn0"><span id="choice0"></span></button>
                <button id="btn1"><span id="choice1"></span></button>
                <button id="btn2"><span id="choice2"></span></button>
                <button id="btn3"><span id="choice3"></span></button>
            </div>
            
            <hr style="margin-top: 20px">
            <footer>
                <p id="progress">Question x for y.</p>
            </footer>
        </div>
    </div>


<script src="quiz_controller.js"></script>
<script src="question.js"></script>
<script src="app.js"></script>