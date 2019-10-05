<?php


$eventname ="";
$date ="";
$time ="";
$location ="";
$unitpower ="";

$typewast ="";
$netweight ="";
$location ="";
$fname ="";
$pnumber ="";

$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['reqsubmit'])) {
	
	 $eventname = mysqli_real_escape_string($db, $_POST['eventname']);
	 $date = mysqli_real_escape_string($db, $_POST['date']);
	 $time = mysqli_real_escape_string($db, $_POST['time']);
	 $location = mysqli_real_escape_string($db, $_POST['location']);
     $unitpower = mysqli_real_escape_string($db, $_POST['unitpower']);
	 
	 $sql = "INSERT INTO reqpower (eventname, date, time, location, unitpower) 
  			  VALUES('$eventname', '$date', '$time', '$location',  '$unitpower')";
			  mysqli_query($db, $sql);
		header('location: publiclogin.php');
        
        	
}
if (isset($_POST['wastdump'])) {
	
	 $typewast = mysqli_real_escape_string($db, $_POST['typewast']);
	 $netweight = mysqli_real_escape_string($db, $_POST['netweight']);
	 $location = mysqli_real_escape_string($db, $_POST['location']);
	 $fname = mysqli_real_escape_string($db, $_POST['fname']);
     $pnumber = mysqli_real_escape_string($db, $_POST['pnumber']);
	 
	 $sql = "INSERT INTO wastetodump (typewast, netweight, location, fname, pnumber) 
  			  VALUES('$typewast', '$netweight',  '$location', '$fname', '$pnumber')";
			  mysqli_query($db, $sql);
		header('location: publiclogin.php');
        
        		
}
   if (isset($_POST['details'])) 
   {
	   header('location: view.php');
	  
   }
   
   
   
   
?>		 