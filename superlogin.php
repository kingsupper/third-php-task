<?php

session_start();

$nameError = $passError = $name = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $pass = $_POST['password'];

    if(empty($name)){
        $nameError = "please enter your name";
    }

    if(empty($pass)){
        $passError = "please enter your password";
    }

    if(empty($nameError) && empty($passError)){
        if($name == "superking" && $pass == "1992")
        {
            $_SESSION['name_login'] = $name;
            $_SESSION['pass_login'] = $pass;
            header("location: superDragon.php");

        }else{
            $_SESSION['message'] = "your account is not in DataBase";
        }
    }

   
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10">

                <h1>Super Admin Login</h1>
                

                <form action="superlogin.php" method="post">
                    <input type="text" value="<?php echo $name; ?>" name="name" placeholder="name" class="form-control text-center">
                    <h5 class="text-center alert-danger"><?php echo $nameError; ?></h5>
                    <input type="password" value="<?php echo $pass; ?>" name="password" placeholder="password" class="form-control text-center mt-4">
                    <h5 class="text-center alert-danger"><?php echo $passError; ?></h5>
                    <button type="submit" class="btn btn-primary w-100 mt-4">Login</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
</body>

</html>