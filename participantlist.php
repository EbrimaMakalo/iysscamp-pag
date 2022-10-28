<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling2.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">


    <title>Fetch Data From Database</title>
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

    <!--Nav Bar-->
    <div class="jumbotron pt-1 pb-1 sticky-top">
        <div class="container mb-2 mt-2" id="eb">
            <div class="d-flex justify-content-between">
                <form method="post" action="search.php">
                    <div class="input-group mr-4">                
                        <input type="text" name="search" class="form-control" placeholder="Search..." maxlength="30">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit" name="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <div>
                    <a href="registration.php"><input type="submit" value="Back" class="btn btn-primary px-4"></a> 
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
    <h2 class="text-primary text-center">List of Registered Participants</h2> <br>
    <table class="table table-striped table-hover table-responsive table-condensed mb-5">
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Nationality</th>
        <th>PhoneCode</th>
        <th>PhoneNumber</th>
        <th>Representing</th>
        <th>Role</th>
        <th>Course</th>
        <th>KundaName</th>    

        <?php
            //for the infinity free server. $conn = mysqli_connect("sql106.epizy.com", "epiz_25858505", "6woyDFn1LIYGG96", "epiz_25858505_junior_project");
            // $conn = mysqli_connect("localhost", "makalo", "OJEdw0Uu5ZSw3SpT", "junior_project"); for the server with usern and password
            $conn = mysqli_connect("localhost", "root", "", "junior_project"); //for default server with no password
            if($conn-> connect_error){
                die("Connection failed:". $conn-> connect_error);
            }

            $sql = "SELECT part_id, full_name, gender, part_nationality, telephone_code, telephone_number, part_representing, part_role, course_name, part_kunda_name from participants";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["part_id"] . "</td><td>". $row["full_name"] . "</td><td>". $row["gender"] . "</td><td>". $row["part_nationality"] . "</td><td>". $row["telephone_code"] . "</td><td>". $row["telephone_number"] . "</td><td>". $row["part_representing"] . "</td><td>". $row["part_role"] . "</td><td>". $row["course_name"] . "</td><td>". $row["part_kunda_name"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 result";
            }

            $conn-> close();
        ?>
    </table>
    </div>

    <!--Footer-->
    <div class="footer bg-primary">
        <div class="container">
            <p>Copyright &copy;<?php $today = date("Y"); echo $today?> Ebrima Makalo.</p>
            <!-- <p>Ebrima Makalo Copyright &copy; 2020</p> -->
            <!-- <p>Ebrima Makalo Copyright &copy; 2020-<?php $today = date("Y"); echo $today?>.</p> -->
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script> -->

</body>
</html>