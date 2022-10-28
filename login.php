<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    
    <title>User Login</title>
</head>
<body>
    <!--Navigation Bar As Heading-->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <!-- <span class="navbar-brand mb-0 h1 pl-2 ml-0" style="border-left: 2px solid">Peace Ambassadors the Gambia, <br> <small>International Youth Summer School (IYSS) Camp</small></span> -->
            <span class="navbar-brand mb-0 h1 pl-2 ml-0" style="border-left: 2px solid">International Youth <br> Summer School Camp</span>
            <i style="color: white; font-size:300%" class="fas fa-dove"></i>
        </div>
    </nav>

    <div id="jumbo" class="jumbotron jumbotron-fluid">
        <div class="container">
            <form class="form-horizontal" action="" method="post" id="loginform">
                <h5 class="text-center text-primary p-2 rounded shadow"><strong>Please Input Your Username and Password To Get access To The System</strong></h5>
                <hr>

                <?php
                    //<!-- start session -->
                    session_start();
                    include('databaseconnection.php');
                    $errors = '';

                    //check user inputs
                    //define error messages
                    $missingUsername = '<p><strong>Please enter a username!</strong></p>';
                    $missingPassword = '<p><strong>Please enter a password!</strong></p>'; 
                    
                    //get username and password
                    //store errors in errors variable
                    //get username
                    if(empty($_POST["username"])){
                        //$errors = $missingUsername;
                        $errors .= $missingUsername;
                    }else{
                        $username = filter_var($_POST["username"],FILTER_SANITIZE_STRING);
                    }
                    //get password
                    if(empty($_POST["password"])){
                        //$errors = $missingPassword;
                        $errors .= $missingPassword;
                    }else{
                        $password = filter_var($_POST["password"],FILTER_SANITIZE_STRING);
                    }
                    //print errors if any
                    if($errors){
                        $resultMessage = '<div class="alert alert-danger">' . $errors . '</div>';
                        echo $resultMessage;
                    }else{
                        //else: no errors
                        $username = mysqli_real_escape_string($link, $username);
                        $password = mysqli_real_escape_string($link, $password); 
                    
                    //Run query: check combination of username and password exists
                    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                    $result = mysqli_query($link, $sql);
                    
                    if(!$result){
                        echo '<div class="alert alert-danger">Error running the query!</div>';
                        //echo '<div class="alert alert-danger"> . mysqli_error($link) . </div>';
                        exit;
                    }

                    //if username and password don't match print error
                    $count = mysqli_num_rows($result);
                    if($count !== 1){
                        echo '<div class="alert alert-danger"><strong>Wrong Username and/or Password!!</strong> <br> Please Enter a Correct Username and Password!</div>';                        
                    } 
                    else {
                        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        // $_SESSION['ID'] = $row['ID'];
                        // $_SESSION['username'] = $row['username'];
                        // $_SESSION['password'] = $row['password'];
                        header("location: registration.php");
                        }
                    }
                    
                ?>

                <!-- login message from php file -->
                <!-- <div id="loginmessage"></div> -->
                
                <div class="form-group">
                    <level class="control-label col-sm-2" for="username"><strong>User Name:</strong></lebel>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Enter UserName..." name="username" maxlength="6">
                    </div>
                </div>
                
                <div class="form-group">
                    <lebel class="control-label col-sm-2" for="password"><strong>Password:</strong></lebel>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <!-- <i class="fas fa-key"></i> -->
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password..." name="password" maxlength="10">
                    </div>
                </div>
                <input type="submit" value="Login" class="btn btn-outline-primary btn p-md-3 shadow">
            </form>
        </div>
    </div>

    <!-- Footer-->
    <div class="footer bg-primary">
        <div class="container">
            <p>Ebrima Makalo Copyright &copy;<?php $today = date("Y"); echo $today?>.</p>
        </div>
    </div>

    <style>
        .footer{
        color: white;
        position: absolute;
        bottom: 0;
        text-align: center;
        width: 100%;
        padding-top: 10px;
    }
    </style>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>