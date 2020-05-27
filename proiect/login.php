<?php
?>
    <div class="grid">
        <div id="quiz">
            <h1>Login</h1>
            <hr style="margin-top: 20px">
            <div class="buttons">
                <form class="login" id="login" action="post">
                        <div class="container_login">
                            <div style="width: 100%;margin: 30px 0;">
                                <label for="uname"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="username" />       
                            </div>    
                            <div style="width: 100%;margin: 30px 0;">
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" />    
                            </div>   
                            <hr style="margin-top: 20px">                             
                            <button class="logout_button" type="submit" onclick = "login()">Login</button>
                       </div>
                 </form>
            </div>
            
            <footer>
                <button class="logout_button" onclick="register()">Register</button>  
                <script>
                    function register(){
                        document.getElementById('login').reset();
                        location.replace("http://localhost/proiect/register.php");
                    }
                </script>    
            </footer>
        </div>
    </div>