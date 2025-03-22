<?php
    include 'ambulancerequest.php';
    $id = $_GET['updateid'];
    if(isset($_POST['book'])){
        $pname = $_POST['pname'];
        $age = $_POST['age'];
        $mobile = $_POST['numbers'];
        $pickup = $_POST['pickuppoint'];
        $drop = $_POST['droppoint'];
        $ambulancetype = $_POST['ambulancetype'];
         
    $sql="update `request` set id=$id,patientname='$pname',age='$age',mobileno='$mobile',pickuplocation='$pickup',droplocation='$drop';ambulancetype='$ambulancetype'
    where id=$id;";
    $savedData = $conn->query($sql);
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "update";
    }
    else{
      die(mysqli_error($conn));
    }
      
    }
	$row = $savedData->fetch_assoc();
    
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="STYLING.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<title>FastAidd booking</title>
		<script src="contactus.js"></script>
		<link rel="icon" type="image/jpg" href="logo.jpg">
		<style>
			.names{
                color: white;
                font-weight: bold;
            }
            #submited{
                padding: 17px;
                width: 150px;
                border: 0px solid rgba(43, 43, 203, 0.863);
                color: red;
            }
            #submited:hover{
                color: white;
                background-color: red;
                box-shadow: 2px 0px 10px 2px white;
            }
		</style>
	</head>
	
	<body>
		<header>
			<nav style="background-color:white;">
				<div class="container-fluid navss">
					<div class="row">
					<div class="col-sm-3  logo">
						
						
						<h2 id="logo1" > <span style="font-size:45px;">&#8653</span><i>FAST-AID</i></h2>
						  <div id="menus3bar"><a href="#" style="text-decoration:none;" onclick="newmenu()"><b>&#xFE19 </b> </a></div>
						<div id="logo2"><p style="margin:0px;">   Be the first to help<p></div><br>
						<p id="logo3" style="margin-top:0px;"><u><b>FIRST AID IS BETTER THAN LAST!</b></u></p>
					</div>
						<div class="col-sm-6">
							<h1></h1>
							<ul class="navs">
							<a class="navsel" href="index.html" ><b>HOME</b></a>
							<a class="navsel" href="aboutus.html"><b>ABOUTUS</b></a>
							<a class="navsel" href="firstaid.html"><b>FIRSTAID</b></a>
							<a class="navsel" href="contactus.html"><b>CONTACTUS</b></a>
							<a class="navsel" href="resources.html" style="background-color:#0073d6;color:white;"><b>AMBULANCE</b></a>
							<a class="navsel" href="quiz.html"><b>QUIZ</b></a>
							</ul>
						</div>
						<div class="col-sm-2 search1">
							
							<form class="navsearch">
							<input id="serchh" type="text" class="form-control" placeholder="Search" required>
							</form>
							
						</div>
						<div class="col-sm-1 search2">
							<button id="submitsss" onclick="searchsub()" type="submit" class="btn btn-primary" style="margin-top:40px;padding:10px;text-align:left;border-radius:25px;"><i class="fa fa-search"></i></button>
						</div>
						</div>
						
						
						<div id="mobilenavss">
			<h1 id="mbicancel1" style="text-align:right; line-height:1;" onclick="closemwnu()">
				<b>&#9587;</b>
			</h1>
			<form id="manusearch"><br>
			<input  type="text" style="width:80%;border:2px solid white;box-shadow:2px 1px 11px 2px #0073d6;" placeholder="   Search.." name="search">
			<a type="submit"> <i class="fa fa-search" style="color:white;size:15px;background-color:#0073d6;padding:9px;border-radius:15px;" ></i></a><hr>
			</form>
			<a class="mobilenavssel" href="index.html" >Home</a><hr><br>
			<a class="mobilenavssel" href="aboutus.html" >AboutUs</a><hr><br>
			<a class="mobilenavssel" href="firstaid.html" >FirstAid</a><hr><br>
			<a class="mobilenavssel" href="contactus.html" >ContactUs</a><hr><br>
			<a class="mobilenavssel" href="resources.html" >Ambulance</a><hr><br>
			<a class="mobilenavssel" href="quiz.html" >Quiz</a><br>
		</div>
						
					</div>
					<div class="navend" style="background-color:black;width:100%;height:1px;">
				</div>
				
				</div>
				
			</nav>
		</header>
		<div class="container-fluid" style="background:url('ambulas.jpg');background-repeat:no-repeat;background-size:cover;">
            <br><br>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6" style="padding:50px;background-color:#ff2420ca;border-radius:25px;;">
                    <form method="post" class="was-validated">
                        <h1 style="text-align: center;color:white;font-weight:bolder;">BOOKING</h1>
                       <p class="names">PATIENT NAME:</p> <input class="form-control" id="pname" name="pname" type="text" value="<?php echo $row["patientname"]; ?>" required><br>
                       <p class="names">PATIENT AGE:</p><input class="form-control" id="age" name="age" type="number" value="<?php echo $row["age"]; ?>" required><br>
                       <p class="names">MOBILE NO:</p><input class="form-control" id="numbers" name="numbers" type="number" value="<?php echo $row["mobileno"]; ?>" required><br>
                       <p class="names">PICKUP HOSPITAL:</p> <select class="form-select" id="pickuppoint" name="pickuppoint" value="<?php echo $row["pickuplocation"]; ?>" style="width:100%;" required>
                        <option>Sahyadri Specialty Hospital, Pune</option>
                        <option>Ruby Hall Hospital, Pune</option>
                        <option>Jehangir Hospital, Pune</option>
                        <option>Sancheti Hospital, Pune</option>
                        <option>KEM Hospital, Pune</option>
                        <option>Aditya Birla Memorial Hospital, Pune</option>
                        <option>Seth Ramdas Shah Memorial Hospital, Pune</option>
                        <option>Deenanath Mangeshkar Hospital, Pune</option>
                        <option>Mgm Hospital Belapur,Belapur, Navi Mumbai</option>
                        <option>P D Hinduja National Hospital & Research Centre, Mumbai</option>
                        <option>Kohinoor Hospital Pvt. Ltd., Mumbai</option>
                      </select><br>
                       <p class="names">DROP HOSPITAL:</p> <select class="form-select" id="droppoint" value="<?php echo $row["droplocation"]; ?>" name="droppoint" style="width:100%;" required>
                        <option>Ruby Hall Hospital, Pune</option>
                        <option>Sahyadri Specialty Hospital, Pune</option>
                        <option>Jehangir Hospital, Pune</option>
                        <option>Sancheti Hospital, Pune</option>
                        <option>KEM Hospital, Pune</option>
                        <option>Aditya Birla Memorial Hospital, Pune</option>
                        <option>Seth Ramdas Shah Memorial Hospital, Pune</option>
                        <option>Deenanath Mangeshkar Hospital, Pune</option>
                        <option>Mgm Hospital Belapur,Belapur, Navi Mumbai</option>
                        <option>P D Hinduja National Hospital & Research Centre, Mumbai</option>
                        <option>Kohinoor Hospital Pvt. Ltd., Mumbai</option>
                      </select><br>
                       <p class="names">AMBULANCE TYPE:</p><select class="form-select" id="ambulancetype" value="<?php echo $row["ambulancetype"]; ?>" name="ambulancetype" style="width:100%;" required>
                        <option>Basic Life Support Ambulance</option>
                        <option>Advance Life Support Ambulance</option>
                        <option>Patient Transfer Ambulance</option>
                        <option>Mortuary Ambulance</option>
                      </select><br><br>
                       <input style="margin-left: 40%;font-weight:bold;" type="submit" id="submited" name="book" value="UPDATE" required>
                    </form></div>
                    <div class="col-sm-3"></div>
                    </div>
                <br><br>
            </div>
        </div>
<footer>
	<div class="container-fluid footers" style="background-color:#0073d6;">
		<div class="row">
			<div class="col-sm-5">
				<h1 style="font-family:Georgia; color:white;text-align:center;margin-top:40px;"><b><span style="font-size:50px;">&#8653</span><i>FAST-AID</i></b></h1>
				<p style="text-align:center;color:white;"><b>First aid refers to the immediate care you should provide when a person is injured, poisoned, or sick. The goal is to ease the pain or reduce its potential from worsening before they receive full treatment. During these critical scenarios, you need to continue providing assistance to the person until the rescue team arrives in the area.</b></p>
			</div>
			<div class="col-sm-4 footer3" style="padding:45px;color:white;" >
			<h1 id="ft3"><b>Explore</b></h1>
			<div class="row c2">
			<div class="col-sm-7">
			<a class="footers2" href="index.html" > > Home</a><br>
			<a class="footers2" href="aboutus.html" >> AboutUs</a><br>
			<a class="footers2" href="firstaid.html" >> FirstAid</a><br>
			<a class="footers2" href="contactus.html" >> ContactUs</a><br></div>
			<div class="col-sm-5">
			<a class="footers2" href="resources2.html" >> Resources</a><br>
			<a class="footers2" href="quiz.html" >> Quiz</a></div>
			</div>
			
			</div>
			<div class="col-sm-3">
				<h1 style="color:white;margin-top:40px;text-align:center;"><b>Follow Us</b></h1>
				<div style="text-align:center;">
				<a style="padding:10px;font-size:25px; color:#0073d6; background-color:white;border-radius:25px;margin:10px;" class="fa fa-twitter footerloggs" ></a>
				<a style="padding:10px;font-size:25px; color:#0073d6; background-color:white;border-radius:25px;margin:10px;" class="fa fa-linkedin footerloggs" ></a>
				<a style="padding:10px;font-size:25px; color:#0073d6; background-color:white;border-radius:35px;margin:10px;" class="fa fa-facebook footerloggs" ></a>
				<a style="padding:10px;font-size:25px; color:#0073d6; background-color:white;border-radius:25px;margin:10px;" class="fa fa-instagram footerloggs" ></a>
				</div>
				
			</div>
		</div>
	</div>
	<div class="container-fluid footlast" >
		<div style="width:100%;height:1px;color:white;"></div>
		<h1 style="padding:25px;font-size:25px;">2023 © FastAidd, All Rights Reserved</h1>
	</div>
</footer>		
 
</html>