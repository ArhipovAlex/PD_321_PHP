<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="ltc.ico">
    <title></title>
</head>
<body onload="nextQuestion()">
    <!--<h1 id="question_number" name="question_number">Quitz<h1>-->
    <form id="question_number" name="question_number" action="result.php" method="post">
        <!--<input type="button" value="next" onclick="nextQuestion()">-->
    </form>
    <script>
        var questionNumber=-1;
        function nextQuestion()
        {
            let request= new XMLHttpRequest();
            let answer=getAnswer();
            let answer=getAnswer();
            questionNumber++;
            
            request.onreadystatechange = function(){
                document.getElementById("question_number").innerHTML=request.responseText;
            }
            if(answer==null) request.open("GET","question.php?q="+questionNumber,true);
            else request.open("GET","question.php?q="+questionNumber+"&a="+answer.value,true);
            request.send();
        }
        function prevQuestion()
        {
            if(questionNumber!=0){

            questionNumber--;
            let request= new XMLHttpRequest();
            let answer=getAnswer();
            request.onreadystatechange = function(){
                document.getElementById("question_number").innerHTML=request.responseText;
            }
            request.open("GET","question.php?q="+questionNumber,true);
            request.send();
            }
        }
        function getAnswer()
        {    
            let answer = document.querySelector(`input[name="question_${questionNumber}"]:checked`);
            if(answer!=null) {console.log(answer.value); return answer;}
            //else console.log("No answer");
        }
    </script>
</body>
</html>