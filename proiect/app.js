function populate() {
    if(quiz.isEnded()){
        showScores();
    }
    else{
        //show question
        var element = document.getElementById("question");
        element. innerHTML = quiz.getQuestionIndex().text;

        //show choices
        var choices = quiz.getQuestionIndex().choices;
        for(var i=0; i< choices.length; i++){
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }
        showprogress();
    }
};
function guess(id, guess){
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
}

function showprogress() {
    var currentQuestionNumber = quiz.questionIndex +1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " +quiz.questions.length;
}

function showScores(){
    // var gameOverHtml = "<h1>Result</h1>";
    //     gameOverHtml += "<h2 id='score'>Your scores: " + quiz.score + "</h2>";
    //     var element = document.getElementById("quiz");
    //     element.innerHTML = gameOverHtml;
        location.replace("http://localhost/proiect/result.php");
}
// var question=document.cookie["question"]; 
// var varinats1=getCookie("varinats1");
// var varinats2=getCookie("varinats2");
// var varinats3=getCookie("varinats3");
// var varinats4=getCookie("varinats4");
// var answer=getCookie("answer");

// function getCookies() { 
//     var cookies = document.cookie.split(';'); 
//     var ret = ''; 
//     for (var i = 1; i <= cookies.length; i++) { 

//         ret += cookies[i - 1] + "<br>"; 
//     } 
//     return ret; 
// } 

// var questions = [
//     new Question(getCookies(),["Java","C#","C++","C"],"C"),
//     new Question("Which language is used for styling web pages?", ["HTML", "JQuery", "CSS", "XML"], "CSS"),
//     new Question("There are ______ main components of object oriented programming.", ["1", "6", "2", "4"], "4"),
//     new Question("Which language is used for web apps?", ["PHP", "Python", "Javascript", "ALL"], "ALL"),
//     new Question("MVC is a _____.",["Language","Library","Framework","ALL"], "Framework")
// ];
var quiz = new Quiz(questions);
populate();