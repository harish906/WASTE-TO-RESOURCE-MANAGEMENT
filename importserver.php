<?php


$vehicaltype ="";
$vehiclenum ="";
$typewast ="";
$netweight ="";
$time ="";
$location ="";
$dumplocation ="";


$tpywast ="";
$ntwwast ="";
$punit ="";
$date ="";
$stocklocation ="";


$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['imp'])) {
	
	 $vehicaltype = mysqli_real_escape_string($db, $_POST['vehicaltype']);
	 $vehiclenum = mysqli_real_escape_string($db, $_POST['vehiclenum']);
	 $typewast = mysqli_real_escape_string($db, $_POST['typewast']);
	 $netweight = mysqli_real_escape_string($db, $_POST['netweight']);
     $time = mysqli_real_escape_string($db, $_POST['time']);
	 $location = mysqli_real_escape_string($db, $_POST['location']);
	 $dumplocation = mysqli_real_escape_string($db, $_POST['dumplocation']);
	 
	 $sql = "INSERT INTO impwast (vehicaltype, vehiclenum, typewast, netweight, time, location, dumplocation) 
  			  VALUES('$vehicaltype','$vehiclenum','$typewast', '$netweight', '$time', '$location',  '$dumplocation')";
			  mysqli_query($db, $sql);
		header('location: officlogin.php');
}       

if (isset($_POST['powergenarated'])) {
	
	 $tpywast = mysqli_real_escape_string($db, $_POST['tpywast']);
	 $ntwwast = mysqli_real_escape_string($db, $_POST['ntwwast']);
	 $punit = mysqli_real_escape_string($db, $_POST['punit']);
	 $date = mysqli_real_escape_string($db, $_POST['date']);
     $stocklocation = mysqli_real_escape_string($db, $_POST['stocklocation']);

	 
	 $sql = "INSERT INTO pwrgenarated (tpywast, ntwwast, punit, date, stocklocation) 
  			  VALUES('$tpywast','$ntwwast','$punit', '$date', '$stocklocation')";
			  mysqli_query($db, $sql);
		header('location: officlogin.php');

   
}
if (isset($_POST['supplypower'])) {
	
	header('location: supply.php');
}

?>