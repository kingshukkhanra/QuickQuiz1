<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick-Quiz Register</title>  
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--       proper js -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   
    <!--  latest compiled javascript     -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="css/style.css">
</head>
  <body>
         <div class="row container" style="box-sizing: border-box;  border: 2px solid #111;">
          <div class="title" >Online Quiz Registration</div>
            <div class="col-lg-8"style="border-right:1px solid #ccc;">
                <header class="page-header badge badge-warning"><h4>SignUp</h4></header><hr/>
                  <form method="post">
                  <div class="form-group">
                     <label>NAME :</label>
                     <input type="text" name="t1" required placeholder="kingshuk khanra"            
                           class="form-control" id="t1" onkeyup="nameCheck()">
                     <strong id="id1" class="text-danger"></strong>
                 </div>
                 <div class="form-group">
                    <label>PHONE :</label>
                    <input type="text" name="t2" required placeholder="8348995005" class="form-control" id="t2" onkeyup="phoneCheck()">
                    <strong id="id2" class="text-danger"></strong>
                 </div>
                 <div class="form-group">
                   <label>EMAIL :</label>
                   <input type="text" name="t3" required placeholder="Email" class="form-control"
                          id="t3" onkeyup="emailCheck()">
                    <strong id="id3" class="text-danger"></strong>
                </div>
                <div class="form-group">
                    <label>PASSWORD :</label>
                    <input type="password" name="p1" required placeholder="password" class="form-control"
                           id="p1" onkeyup="PasswordCheck()">
                   <strong id="id4" class="text-danger"></strong>
                </div>
                 <div class="form-group">
                   <button class="btn btn-sm btn-primary" name="btnSignUp" value="SignUp" title="SignUp" id="b1">SignUp</button>
                   <button class="btn btn-sm btn-warning" type="Reset" name="btnreset" value="Reset" title="Reset">Reset</button>
                 </div>
               </form>

               <?php
                    if(isset($_POST['btnSignUp'])){
                      
                      $name  = $_POST['t1'];
                      $phone = $_POST['t2'];
                      $email = $_POST['t3'];
                      $pass1 = $_POST['p1'];

                      $con = new Mysqli("localhost","root","","quiz");

                      if($con->connect_error) die($con->connect_error);
                      else{
                        $SQL = "insert into users(User_name,Email,Phone,Password)values('$name','$email','$phone',password('$pass1'))";
                        $con->query($SQL);
                        $rows = $con->affected_rows;
                        $con->close();
                        if($rows ==1)
                           echo "<script>alert('Registration Sucessfull');</script>";
                        else
                        {
                          echo "Error While Registration";
                        }
                      }
                      
                    }
               ?>
            </div>

          <div class="col-lg-4">
           <header class="page-header badge badge-warning"><h4>SignIn</h4></header><hr/>
           <form method="post">
               <div class="form-group">
                <label>UserName :</label>
                <input type="text" name="p11" required=""placeholder="Email | Phone" class="form-control">
               </div>
               <div class="form-group">
                <label>PASSWORD :</label>
                <input type="password" name="p12" required=""placeholder="password" class="form-control">
                </div>
               <div class="form-group">
                <button name="btnSIgnIn" value="signIn" class="btn btn-sm btn-info" title="LogIn">LogIn</button>
                <button name="btnReset" class="btn btn-sm btn-warning" type="Reset" title="Reset">Reset</button>
               </div>
           </form>

           <?php
               if(isset($_POST['btnSIgnIn'])){
                 $user_name = $_POST['p11'];
                 $pass_word = $_POST['p12'];

                 $con = new Mysqli("localhost","root","","quiz");

                 if($con->connect_error) die($con->connect_error);
                 else{
                   $SQL = "select * from users where (Email='$user_name'or Phone='$user_name') and Password = password('$pass_word')";
                   $res = $con->query($SQL);
                   if($rows = $res->fetch_assoc()){
                     $_SESSION['USER'] = $rows['User_name'];
                     $_SESSION['IP']   = $_SERVER['REMOTE_ADDR'];

                     echo "<script>
                     alert('Login sucessfull');
                     window.location.href='content.php'
                          </script>";

                   }
                   else{
                     echo "<div class='alert alert-danger'>Invalid Username or Password </div>";
                   }
                   $con->close();
                 }

               }
           ?>
         </div>
       </div>
</body>
</html>