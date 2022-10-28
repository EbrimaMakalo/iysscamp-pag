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

    <title>Searched Data from the Database</title>
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
                        <input type="search" name="search" class="form-control" placeholder="Search..." maxlength="30">
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


    <!-- Fetching Data from the Database through the search -->
    <div class="container-fluid">
        <?php
            //for infinityfree.net server.. $conn = new PDO("mysql:host=sql106.epizy.com;dbname=epiz_25858505_junior_project", 'epiz_25858505','6woyDFn1LIYGG96');
            $conn = new PDO("mysql:host=localhost;dbname=junior_project", 'makalo','OJEdw0Uu5ZSw3SpT');
        
            if(isset($_POST["submit"])) {
            $str = $_POST["search"];
            $sth = $conn->prepare("SELECT * FROM participants WHERE full_name = '$str'");

            $sth->setFetchMode(PDO:: FETCH_OBJ);
            $sth -> execute();

            if($row = $sth->fetch()){
        ?>
                
            <h4 class="text-primary text-center">Searched Data in the Database</h4> <br>
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

                <tr>
                    <td><?php echo $row->part_id; ?></td>
                    <td><?php echo $row->full_name; ?></td>
                    <td><?php echo $row->gender; ?></td>
                    <td><?php echo $row->part_nationality; ?></td>
                    <td><?php echo $row->telephone_code; ?></td>
                    <td><?php echo $row->telephone_number; ?></td>
                    <td><?php echo $row->part_representing; ?></td>
                    <td><?php echo $row->part_role; ?></td>
                     <td><?php echo $row->course_name; ?></td>
                    <td><?php echo $row->part_kunda_name; ?></td>
                </tr>

            </table>
        
            <?php
            }

            else {
                echo "<script>alert('Oops! Name Does not exist in the Database')</script>";
            }
        }
    ?>
    </div>

    <br>

</body>
</html>