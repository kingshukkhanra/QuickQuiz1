<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz On Basic Html</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--question Screen-->
      <div class="box" id="questionScreen" >

          <div class="title">
              Online Quiz Application
          </div>

          <div class="header">
             <div class="scoreBox">
                Score : <span></span>
             </div>

             <div class="timerBox">
               Time Left :<span></span>
             </div>
          </div>

          <div class="questionBox">
            What does HTML stand for
          </div>

          <div class="optionBox">
              <span onclick="checkAnswer(this)" data-opt="1"></span>
              <span onclick="checkAnswer(this)" data-opt="2"></span>
              <span onclick="checkAnswer(this)" data-opt="3"></span>
              <span onclick="checkAnswer(this)" data-opt="4"></span>
          </div>
          <div class="footer">
              <button onclick="next()" > next </button>
              <button onclick="showrResult(1)">Show Result</button>
          </div>

      </div>
    <!-- Its Ends Here-->

      <!--Result Screen-->
    <div class="box" id="resultScreen"  style="display: none;">

          <div class="title">
              Online Quiz Result
          </div>

          <div class="resultBox">
              <label> Questions : </label>
              <span id="totalQuestion">10</span>
              <label> Attemt : </label>
              <span id="attemtQuestion">01</span>
              <label> Correct : </label>
              <span id="correctAnswers">01</span>
              <label> Wrong : </label>
              <span id="wrongAnswers">10</span>
              <label> Time Taken  : </label>
              <span id="time">10</span>
              <label> Status : </label>
              <span id="status">0</span>
          </div>

       <div class="buttonBox">
           <a href="content.php">Start Again</a>
       </div>
    </div>
    <!--Ends-->


</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/quiz.js"></script>
<script src="js/script.js"></script>
</html>