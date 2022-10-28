<?php
    //$link = @mysqli_connect("localhost", "makalo", "OJEdw0Uu5ZSw3SpT", "junior_project");
    //$link = @mysqli_connect("sql106.epizy.com", "epiz_25858505", "6woyDFn1LIYGG96", "epiz_25858505_junior_project");


?>


<!-- Local Server database connection -->
<?php
    // $db_user = "makalo";
    // $db_pass = "OJEdw0Uu5ZSw3SpT";
    // $db_name = "junior_project";

    // $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db_user = "root";
    $db_pass = "";
    $db_name = "junior_project";

    $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>


<!-- InfinityFree.com Live Server database connection -->
<?php
/*    $db_user = "epiz_25858505";
    $db_pass = "6woyDFn1LIYGG96";
    $db_name = "epiz_25858505_junior_project";

    $db = new PDO('mysql:host=sql106.epizy.com;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/    
?>



<!-- Another way of storing data into the database when the user clicks the submit button -->
<?php
/*    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $part_nationality = $_POST['part_nationality'];
    $telephone_code = $_POST['telephone_code'];
    $telephone_number = $_POST['telephone_number'];
    $part_representing = $_POST['part_representing'];
    $part_role = $_POST['part_role'];
    $course_name = $_POST['course_name'];
    $part_kunda_name = $_POST['part_kunda_name'];
    $part_image = $_POST['part_image'];

    //Database Connection
    $conn = new mysqli('localhost', 'makalo', 'OJEdw0Uu5ZSw3SpT', 'junior_project');
    if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    } else{
        $stmt = $conn->prepare("insert into participants(full_name, gender, part_nationality, telephone_code, telephone_number, part_representing, part_role, course_name, part_kunda_name, part_image)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssiisssss', $full_name, $gender, $part_nationality, $telephone_code, $telephone_number, $part_representing, $part_role, $course_name, $part_kunda_name, $part_image);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
    }
*/
?>
