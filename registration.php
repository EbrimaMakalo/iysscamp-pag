<?php
    //require_once('registrationdbconnection.php');

    //for the infinityfree.net server. $con = mysqli_connect("sql106.epizy.com","epiz_25858505","6woyDFn1LIYGG96","epiz_25858505_junior_project");
    //$con = mysqli_connect("localhost","makalo","OJEdw0Uu5ZSw3SpT","junior_project");  //for server with username and password formed
    $con = mysqli_connect("localhost", "root", "", "junior_project");  //for default server 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="styling2.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    
    <title>Participant Registration</title>
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
                    <a href="registration.php"><input type="submit" value="Register" class="btn btn-primary px-3"></a> 
                </div>
            </div>
        </div>
    </div>
    
    <!--Registration Form-->
    <div class="container" id="makalo">
        <h4 class="text-primary">Please Register a Participant</h4>
        
        <form method="post" action="" class="mb-5" enctype="multipart/form-data">
            <div class="form-group">
                <lebel for=""><strong>Full Name:</strong></lebel>
                <input type="text" name="full_name" class="form-control" placeholder="Full Name..." maxlength="30">
            </div>

            <div class="form-group">
                <lebel for=""><strong>Gender:</strong></lebel>
                <div class="form_group">
                    <input class="radio-inline" type="radio" name="gender" value="m" checked>Male
                    <input class="radio-inline ml-4" type="radio" name="gender" value="f">Female
                </div>
            </div>
            <div class="form-group">
                <lebel for=""><strong>Nationality:</strong></lebel>
                <select name="part_nationality" class="form-control">
                    <option value="Gambia">Gambia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Guinea Bissau">Guinea Bissau</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="form-group">
                <lebel for=""><strong>Phone Number:</strong></lebel>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <select name="telephone_code" class="border-primary">
                            <option value="+220">+220</option>
                            <option value="+221">+221</option>
                            <option value="+245">+245</option>
                            <option value=""></option>
                        </select>
                    </div>
                    <input type="number" name="telephone_number" class="form-control" placeholder="Telephone no." maxlength="15">
                </div>
            </div>
            <div class="form-group">
                <lebel for=""><strong>Representing:</strong></lebel>
                <select name="part_representing" class="form-control">
                    <option value=""></option>
                    <option value="AMYA">AMYA</option>
                    <option value="FIOH">FIOH</option>
                    <option value="The Balance">The Balance</option>
                    <option value="UTG">UTG</option>
                    <option value="YOCOG">YOCOG</option>
                    <option value="Immigration">Immigration</option>
                    <option value="Police">Police</option>
                    <option value="Basse Youths Club">Basse Youths Club</option>
                    <option value="Gambia Red Cross Service">Gambia Red Cross Service</option>
                    <option value="MDI">MDI</option>
                    <option value="Gambia College">Gambia College</option>
                    <option value="GTTI">GTTI</option>
                    <option value="GTHI">GTHI</option>
                    <option value="Banjul Youths Association">Banjul Youths Association</option>
                    <option value="NBR Youths Association">NBR Youths Association</option>

                </select>
            </div>
            <div class="form-group">
                <lebel for=""><strong>Role:</strong></lebel>
                <select name="part_role" class="form-control">
                    <option value="Participant">Participant</option>
                    <option value="OC">OC</option>
                </select>
            </div>
            <div class="form-group">
                <lebel for=""><strong>Course(s):</strong></lebel>
                <select name="course_name" class="form-control">
                    <option value=""></option>
                    <option value="IT">IT</option>
                    <option value="Leadership Training">Leadership Training</option>
                    <option value="Peace and Conflict management">Peace and Conflict management</option>
                    <option value="Enterpreneuship">Enterpreneuship</option>
                    <option value="Gender Definitions and Concepts">Gender Definitions and Concepts</option>
                    <option value="Introduction to Psychology">Introduction to Psychology</option>
                    <option value="Introduction to Management">Introduction to Management</option>
                    <option value="Ethics">Ethics</option>
                    <option value="Networking">Networking</option>
                    <option value="Introduction to Politics">Introduction to Politics</option>
                </select>
            </div>
            <div class="form-group">
                <lebel for=""><strong>Kunda Name:</strong></lebel>
                <select name="part_kunda_name" class="form-control">
                    <option value="Manding">Manding</option>
                    <option value="Fulbeh">Fulbeh</option>
                    <option value="Jolof">Jolof</option>
                    <option value="Manjak">Manjak</option>
                    <option value="Soninkara">Soninkara</option>
                    <option value="Ajamataw">Ajamataw</option>
                </select>
            </div>
            <div class="form-group">
                <lebel for=""><strong>Image:</strong></lebel> <br>
                <input type="File" name="pic" accept="image/*;capture=camera"/>
            </div>
            <input type="submit" name="submit" value="Submit" class="form-control btn btn-outline-primary shadow">
            <hr>
            <div>
                <a href="participantlist.php"><button type="button" class="btn btn-primary mt-3 shadow">View Registered Participants</button></a>
                <!-- <a class="btn btn-outline-primary mt-3 shadow" href="participantlist.php">View Registered Participants</a> -->
                <a href="participantcard.php"><button type="button" class="btn btn-light mt-3 shadow">View Participants ID Card</button></a>

                <!-- <a class="btn btn-light mt-3 shadow" href="participantcard.php">View Participants ID Card</a> -->
            </div>
        </form>
    </div>

    <!--Footer-->
    <div class="footer bg-primary">
        <div class="container">
            <p>Copyright &copy;<?php $today = date("Y"); echo $today?> Ebrima Makalo.</p>
            <!-- <p>Ebrima Makalo Copyright &copy; 2020</p> -->
            <!-- <p>Ebrima Makalo Copyright &copy; 2020-<?php $today = date("Y"); echo $today?>.</p> -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>


</body>
</html>

<?php
                if(isset($_POST['submit'])){
                    //text data variables
                    $full_name = $_POST['full_name'];
                    $gender = $_POST['gender'];
                    $part_nationality = $_POST['part_nationality'];
                    $telephone_code = $_POST['telephone_code'];
                    $telephone_number = $_POST['telephone_number'];
                    $part_representing = $_POST['part_representing'];
                    $part_role = $_POST['part_role'];
                    $course_name = $_POST['course_name'];
                    $part_kunda_name = $_POST['part_kunda_name'];
                    //$pic = $_POST['pic'];
                    
            
                    //image names
                    $st_pic = $_FILES['pic']['name'];
            
                    //image temp names
                    $temp_name=$_FILES['pic']['tmp_name'];
            
                    $f_extension1 = explode('.',$st_pic);
                    $f_extension1 = strtolower(end($f_extension1));
                    $f_newfile1 = uniqid().'.'.$f_extension1;

                    if($full_name=='' OR $f_newfile1==''){
                        echo"<script>alert('Oops! name and image fields cannot be empty, please fill them up and other fields as well.')</script>";
                            exit();
                        } else {
                                // uploading images to ist folder
                                move_uploaded_file($temp_name,"participant_images/$f_newfile1");
                                $sql = "INSERT INTO participants (full_name, gender, part_nationality, telephone_code, telephone_number, part_representing, part_role, course_name, part_kunda_name, pic ) VALUES('$full_name', '$gender', '$part_nationality', '$telephone_code', '$telephone_number', '$part_representing', '$part_role', '$course_name', '$part_kunda_name', '$f_newfile1')";

                                $run_participant = mysqli_query($con, $sql);
	                            if($run_participant){
		                            echo"<script>alert('Participant registered successfully.')</script>";
	                            }
	                            else{
		                        echo"<script>alert('There were errors while saving the data')</script>";
	                            }

                            }
            
                        }
                    

        ?>