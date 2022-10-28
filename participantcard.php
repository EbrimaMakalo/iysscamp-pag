<?php
    //for the infinityfree.net server. $con = mysqli_connect("sql106.epizy.com","epiz_25858505","6woyDFn1LIYGG96","epiz_25858505_junior_project");
    // $con = mysqli_connect("localhost","makalo","OJEdw0Uu5ZSw3SpT","junior_project");  for the server with usern and password
    $con = mysqli_connect("localhost","root","","junior_project");   //for default server with no password
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

    <title>Participant Cards</title>
    <script language="javascript">
        function printpage()
            {
                window.print();
            }
    </script>
</head>

<style>
    #card{
	    float:left;
	    width:360px;
	    height:230px;
	    margin:30px;
	    border:1px solid black;
	    /* background-repeat: no-repeat;
	    background-size: 360px 230px;
	    -webkit-print-color-adjust: exact; */
   }
   #c_left{
	    margin-top:70px;
        /* margin-bottom:30px; */
	    margin-left:10px;
	    float:left;
	    width:80px;
	    height:120px;
	   
   }

   #c_box{
        width:80px;
        height:20px;
        padding-left:12px;
   }

  #c_right{
    margin-top:20px;          
    margin-left:110px;
    width:220px;
    height:200px;
   }

   #bottom{
       /* margin-top:178px; */
       margin-top:-64px;
       background-color: lightgray;
   }

   #top{
       margin-bottom: 0;
   }

   td{
	   font-size:14px;
   }

   </style>

    <!--Navigation Bar As Heading-->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 pl-2 ml-0" style="border-left: 2px solid">International Youth <br> Summer School Camp</span>
            <i style="color: white; font-size:300%" class="fas fa-dove"></i>
        </div>
    </nav>

    <!--Nav Bar-->
    <div class="jumbotron pt-1 pb-1 sticky-top">
        <div class="container mb-2 mt-2" id="eb">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="registration.php"><input type="submit" value="Back" class="btn btn-outline-primary px-5"></a> 
                </div>
            </div>
        </div>
    </div>

    <?php

       $i=0;
		$get_participant="select*from participants order by 1 DESC;";
		
		$run_participant=mysqli_query($con, $get_participant);
		
		while ($row_participant=mysqli_fetch_array($run_participant)){
						
			$part_id = $row_participant['part_id'];
			$full_name = $row_participant['full_name'];
			$gender = $row_participant['gender'];
			$part_nationality = $row_participant['part_nationality'];
			$telephone_code = $row_participant['telephone_code'];
			$telephone_number = $row_participant['telephone_number'];
			$part_representing = $row_participant['part_representing'];
            $part_role = $row_participant['part_role'];
            $course_name = $row_participant['course_name'];
            $part_kunda_name = $row_participant['part_kunda_name'];
            $pic = $row_participant['pic'];
			$i++;
			
			
	?>


<body>

    <div id="card">
	    <div id="c_left">
	        <img src="participant_images/<?php echo $pic; ?>"width="90px"height="100px"><br>
            <!-- also add on the img tag style="border:1px solid black;" in other to style the border of the image -->
            <div id="c_box">
	            ID #: <?php echo $part_id; ?>
	        </div>
	    </div>
        
        <div id="top" class="container-fluid navbar-dark bg-primary">
            <!-- <span class="navbar-brand mb-0 h1 pl-2 ml-0" style="border-left: 2px solid">Peace Ambassadors the Gambia, <br> <small>International Youth Summer School (IYSS) Camp</small></span> -->
            <span class="navbar-brand">10th IYSS Camp</span>
            <i style="color: white; font-size:200%" class="fas fa-dove pt-1"></i>
        </div>

	    <div id="c_right">	    
            <table style="margin-top:23px;">
                <tr>
                    <td><b>Name</b></td><td><b>: <?php echo $full_name; ?></b></td>
                </tr>
                <tr>
                    <td><b>Nationality</b></td><td>: <?php echo $part_nationality; ?></td>
                </tr>
                <tr>
                    <td><b>Role</b></td><td>: <?php echo $part_role; ?></td>
                </tr>
                <tr>
                    <td><b>Kunda Name</b></td><td>: <?php echo $part_kunda_name; ?></td>
                </tr>
	        </table>
	    </div>

        <div id="bottom" class="text-black text-center">
            <p>PAG. Motto: Give Peace A Chance</p> 
        </div>
	    
	</div>
    
    <?php } ?>

</body>
</html>