<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz:Content</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="leftSide1">
           <h1 class="tilt"> Quick Quiz</h1>
        </div>
        <div class="rightSide1">
        <?php   if(isset($_SESSION['USER'])) {  ?>
             <h1>Welcome to Online Quiz <h4></strong><?php  echo $_SESSION['USER'] ?> </strong></h4></h1>
                <a href="#"></a>
             <?php    }  ?>
             <button class="btn btn-primary"><h2>Availale Quizes</h2></button>
             <ul>
                 <li><buttond class="bttn"><a href="index1.php">Quiz On Basic HTML</a></button></li>
                 <li><buttond class="bttn"><a href="index2.php">Quiz On JAVA</a></button></li>
                 <li><buttond class="bttn"><a href="index3.php">Quiz On CSS</a></button></li>
                 <li><buttond class="bttn"><a href="index4.php">Quiz On DS</a></button></li>
             </ul>
        </div>
    </div>

</body>
<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/tilt.min.js"></script>
<script>
    $(".leftSide1 h1").tilt({
        scale :1.2,
    })
</script>
</html>