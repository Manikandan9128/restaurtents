<?php
include("connect.php");
if(isset($_POST["signup"])){
    $username=$_POST["username"];
    $password=md5($_POST["password"]);
    $cpassword=md5($_POST["cpassword"]);
    $query= "select * from signup where username='$username'";
    $result= mysqli_query($conn,$query);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "user already exist";
        }
        else{
            if($password==$cpassword){
                $sql="insert into signup (username,password)values('$username','$password')";
                $result=mysqli_query($conn,$sql);
                header("location:index.php");
            }
            else{
                echo "password didn't match";
            }
      

        }
    }
}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Bootsrap css -->
    <link
      rel="stylesheet"
      href="./bootstrap-5.0.2-dist/css/bootstrap.min.css"/>
   
    <!-- Js  -->
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- font awasome  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    
    <!-- CSS -->
    <link rel="stylesheet" href="./style.css" ?v=<?php echo time(); ?>/>
  </head>
  <body>
        <div class="container h-100">
            <h1 class="text-center">Sign Up</h1>
            <div class="row d-flex align-items-center">
                <div class="col-md-12">
                    <form action="signup.php" method="post">
                        <input type="text" name="username" class="form-control mt-5" placeholder="Enter your name" required>
                        <input type="password" name="password" class="form-control my-5" placeholder="Enter password" required maxlength="8" >
                        <input type="password" name="cpassword" class="form-control" placeholder="Confirm password" required maxlength="8" >                
                        <div>
                    <button type="submit" name="signup" class="btn btn-primary mt-5" >Sign Up</button>
                    </div>
                    </form>
               

                </div>
            </div>
        </div>
  </body>
</html>