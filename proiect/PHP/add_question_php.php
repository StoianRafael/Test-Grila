<?php
// Include config file
require_once "config.php";

$question_err =$variant1_err=$variant2_err=$variant3_err=$variant4_err=$answer_err="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["question"]))){
        $question_err = "Please enter a question.";
    }
    if(empty(trim($_POST["variant1"]))){
        $variant1_err = "Please enter a variant1.";
    }
    if(empty(trim($_POST["variant2"]))){
        $variant1_err = "Please enter a variant2.";
    }
    if(empty(trim($_POST["variant3"]))){
        $variant1_err = "Please enter a variant3.";
    }
    if(empty(trim($_POST["variant4"]))){
        $variant1_err = "Please enter a variant4.";
    }
    if(empty(trim($_POST["answer"]))){
        $answer_err = "Please enter a answer.";
    }
    if(empty($question_err) && empty($variant1_err) && empty($variant2_err) && empty($variant3_err) && empty($variant4_err) && empty($answer_err)){

            $sql = "INSERT INTO question (question, variants1, variants2, variants3, variants4, answer) VALUES (?, ?, ?, ?, ?, ?)";

            if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $question, $variants1, $variants2, $variants3, $variants4, $answer);
    
            // Set parameters
             $question = trim($_POST["question"]);
            $variants1 = trim($_POST["variant1"]);
            $variants2 = trim($_POST["variant2"]);
            $variants3 = trim($_POST["variant3"]);
            $variants4 = trim($_POST["variant4"]);
            $answer = trim($_POST["answer"]);
            
            // Attempt to execute the prepared statement
             if(mysqli_stmt_execute($stmt)){
                echo "Alabalabale";
            // Redirect to login page
           header("location: http://localhost/proiect/");
            } else{
            echo "Something went wrong. Please try again later.";
             }
             // Close statement
            mysqli_stmt_close($stmt);
            }
// Close connection
mysqli_close($link);
}
}
?>