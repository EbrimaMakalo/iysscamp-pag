<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylehome.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Home</title>
</head>
<body>
    
<!--Navigation Bar-->  
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid" >
            <!-- <span class="navbar-brand mb-0 h1 pl-2 ml-0" style="border-left: 2px solid">Peace Ambassadors the Gambia, <br> <small>International Youth Summer School (IYSS) Camp</small></span> -->
            <span class="navbar-brand mb-0 h1 pl-2 ml-0" style="border-left: 2px solid">International Youth <br> Summer School Camp</span>
            <a href="login.php"><input type="submit" value="Login" class="btn btn-light"></a>
        </div>
    </nav>









    

<div class="container-fluid">
    <div>
        <img src="PeaceA2.jpg" alt="peace">
    </div>

    <!--Jumbotron with an overview of the system-->
    <div class="jumbotron" id="myContainer" class="mb-5 mt-5">
        <h2 class="text-black">IYSS Camp Participant Registration and <br> ID Card Processing System</h2>
        <br>
        <p class="text-danger"><strong><i>Register participants accurately in a convenient manner</i></strong></p>
        <p class="text-primary"><strong><i>which also includes enabling the processing of Participant ID Cards</i></strong></p>
        <p class="text-success"><strong><i>Click on to the Login button to login</i></strong></p>
        <br>
        <h4 class="text-black pb-3">Peace Ambassadors the Gambia <small class="ml-5">motto: Give Peace A Chance!</small> </h4>
    </div>

</div>











<!--Jumbotron with an overview of the system-->
  <!-- <div class="container" id="myContainer" class="mb-5 mt-5">
      <h2 class="text-white">IYSS Camp Participant Registration and <br> ID Card Processing System</h2>
      <br>
      <p class="text-danger"><strong><i>Register participants accurately in a convenient manner</i></strong></p>
      <p class="text-primary"><strong><i>which also includes enabling the processing of Participant ID Cards</i></strong></p>
      <p class="text-success"><strong><i>Click on to the Login button to login</i></strong></p>
      <br>
      <h4 class="text-white pb-5">Peace Ambassadors the Gambia <small class="ml-5">motto: Give Peace A Chance!</small> </h4>
  </div> -->

<!-- Footer-->
  <div class="footer bg-primary">
      <div class="container">
          <p>Copyright &copy;<?php $today = date("Y"); echo $today?> Ebrima Makalo.</p>
      </div>
  </div>


    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>