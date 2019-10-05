<?php


$eventname ="";
$date ="";
$time ="";
$location ="";
$unitpower ="";

$suplace ="";
$datee ="";
$timee ="";
$locatione ="";
$unitpowere ="";


$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['supsubmit'])) {
	
	 $eventname = mysqli_real_escape_string($db, $_POST['eventname']);
	 $date = mysqli_real_escape_string($db, $_POST['date']);
	 $time = mysqli_real_escape_string($db, $_POST['time']);
	 $location = mysqli_real_escape_string($db, $_POST['location']);
     $unitpower = mysqli_real_escape_string($db, $_POST['unitpower']);
	 
	 $sql = "INSERT INTO eventsupply (eventname, date, time, location, unitpower) 
  			  VALUES('$eventname', '$date', '$time', '$location',  '$unitpower')";
			  mysqli_query($db, $sql);
		header('location: supply.php');
        
        	
}

if (isset($_POST['pubsumnit'])) {
	
	 $suplace = mysqli_real_escape_string($db, $_POST['suplace']);
	 $datee = mysqli_real_escape_string($db, $_POST['datee']);
	 $timee = mysqli_real_escape_string($db, $_POST['timee']);
	 $locatione = mysqli_real_escape_string($db, $_POST['locatione']);
     $unitpowere = mysqli_real_escape_string($db, $_POST['unitpowere']);
	 
	 $sql = "INSERT INTO pubsupply (suplace, datee, timee, locatione, unitpowere) 
  			  VALUES('$suplace', '$datee', '$timee', '$locatione',  '$unitpowere')";
			  mysqli_query($db, $sql);
		header('location: supply.php');
        
        	
}

?>