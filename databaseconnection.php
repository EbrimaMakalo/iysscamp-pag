<?php
    $link = @mysqli_connect("localhost", "root", "", "junior_project");  //this 4 the default server 
    //(this link is for server with username and pass..) $link = @mysqli_connect("localhost", "makalo", "OJEdw0Uu5ZSw3SpT", "junior_project");
    // $link = @mysqli_connect("sql106.epizy.com", "epiz_25858505", "6woyDFn1LIYGG96", "epiz_25858505_junior_project");
?>  

<?php
//queries for the user login form i.e users table
    // $sql = "INSERT INTO users (username, password) VALUES ('User5', 'tima@123')";
    // if(mysqli_query($link, $sql)){
    //  echo "<p>New row added successfully!</p>";
    // }else{
    //  echo "ERROR: Unable to execute $sql" .
    // mysql_error($link);
    // }
?>

<?php
//queries for the courses table
/*
$sql = "CREATE TABLE courses(course_name VARCHAR(70) NOT NULL PRIMARY KEY, lecturer_name
VARCHAR(30) NOT NULL, lecturer_tel_no VARCHAR(30), lecturer_course_fee VARCHAR(6))";
if(mysqli_query($link, $sql)){
 echo "<p>Table courses created successfuly!</p>";
}else{
 echo "ERROR: Unable to execute $sql" . mysql_error($link);
}
*/

//queries for the courses table data values
/*    $sql = "INSERT INTO courses (course_name, lecturer_name, lecturer_tel_no, lecturer_course_fee)
    VALUES ('Introduction to Politics', 'Dr. Ismaila Ceesay', '+220 9211245017', '10,000')";
    if(mysqli_query($link, $sql)){
        echo "<p>New row added successfully!</p>";
        }else{
        echo "ERROR: Unable to execute $sql" . mysql_error($link);
        }*/ 
?>


