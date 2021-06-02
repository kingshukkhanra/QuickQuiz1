let index = 0;

let attempt = 0; 

let score = 0;

let wrong = 0;

let questions = quiz2.sort(function(){
    return 0.5 - Math.random();
}); 

let time = 0;
let totalQuestion = questions.length;

$(function(){
 
     let totalTime = 200;
     let min = 0;
     let sec = 0;
     let counter = 0;

     let timer = setInterval(function(){
           counter++;
           time = counter
           min = Math.floor((totalTime - counter) / 60 );  //clculating minute
           sec = totalTime - (min * 60) - counter;
           //console.log(sec);

           $(".timerBox span").text(min + " : " + sec);
           if(counter == totalTime){
               clearInterval(timer);
               confirm("Times up");
               result();
           }
     },1000)  //timer set for  sec interval 

     printQuestion(index);
});


function printQuestion(i){
    console.log(questions[0]);

    $(".questionBox").text(questions[i].question);
    $(".optionBox span").eq(0).text(questions[i].option[0]);
    $(".optionBox span").eq(1).text(questions[i].option[1]);
    $(".optionBox span").eq(2).text(questions[i].option[2]);
    $(".optionBox span").eq(3).text(questions[i].option[3]);
}

function checkAnswer(option){
   attempt++;
   let optionClicked = $(option).data("opt");
   //console.log(optionClicked);
   console.log(questions[index]);

   if(optionClicked == questions[index].answer){
       $(option).addClass("right");
       score++;
   }
   else{
      $(option).addClass("wrong");
      wrong++
   }

   $(".scoreBox span").text(score);

   $(".optionBox span").attr("onclick","");

}

function next()
{
   // console.log("next");

   if(index >=(questions.length - 1)){
       showrResult(0);
       return;
   }
   index++;
   $(".optionBox span").removeClass();
   $(".optionBox span").attr("onclick","checkAnswer(this)")
   printQuestion(index);
}

function showrResult(j){

    if(j==1 && index <questions.length -1 && !confirm("quiz not finish yet"))
    {
        return;
    }
   result();
    
}


function result()
{
    $("#questionScreen").hide();
    $("#resultScreen").show();

    $("#totalQuestion").text(totalQuestion);
    $("#attemtQuestion").text(attempt)
    $("#correctAnswers").text(score);
    $("#wrongAnswers").text(wrong);
    $("#time").text(time);
    if(score < 4)
    {
        $("#status").addClass("fail");
        $("#status").text("Fail");
    }
    else{
        $("#status").addClass("success");
        $("#status").text("Pass");
    }
}