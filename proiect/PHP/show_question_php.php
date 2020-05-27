<script src="question.js"></script>
<?php
require_once "config.php"; 
                    $sql="SELECT * FROM question"; 
                    $result=mysqli_query($link,$sql);
                    $resultCheck=mysqli_num_rows($result);
                    $question="question";
                    $var1="var1";
                    $var2="var2";
                    $var3="var3";
                    $var4="var4";
                    $answer="answer";?>
                    <script type="text/javascript">
                    var questions = [
                  <?php  if($resultCheck>0){
                        while($row=mysqli_fetch_assoc($result)){
                            $question=$row["question"];
                            $var1=$row["variants1"];
                            $var2=$row["variants2"];
                            $var3=$row["variants3"];
                            $var4=$row["variants4"];
                            $answer=$row["answer"];
                    ?>

    new Question("<?php echo $question ?>",["<?php echo $var1?>","<?php echo $var2?>","<?php echo $var3?>","<?php echo $var4?>"],"<?php echo $answer?>"),
    <?php 
                }}        
mysqli_close($link);
 ?>

];
                </script> 
                <script src="quiz_controller.js"></script>

<script src="app.js"></script>   
                