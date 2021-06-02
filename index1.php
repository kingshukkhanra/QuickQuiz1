<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Online Quiz</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <!-- content here  -->
       <div class="container">
           <div class="leftSide">
              <h1 class="tilt">Quiz on Basic Html</h1>
           </div>
           <div class="rightSide">
                <h1>Welcome to Online Quiz</h1>
                <h2>Features :- </h2>
                <ul>
                    <li>10 Question (20sec each)</li>
                    <li>200 sec timer</li>
                    <li>Random Question</li>
                    <li>Get Result Any Time </li>
                </ul>

                <a href="question1.php">START</a>
           </div>
       </div>
       

    </body>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/tilt.min.js"></script>
    <script>
        $(".tilt").tilt({
            scale :1.2,
        })
    </script>
</html>
