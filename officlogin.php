<?php include('server1.php');?>

<html>
<head>
<title>Logind</title>
<link rel="icon" type="img/png" href="img/11.png"/>
<style>
body
{
background:url('img/2.gif');
background-position:center;
background-size:cover;
height=100%; width=100%;
background-repeat:no-repeat;
}
.box
{
  position: absolute;
  top:60%;
  left:20%;
  transform:translate(-50%,-50%);
  width:400px;
  padding: 10px 20px;
  background: rgba(0,0,0,.8);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius:40px;
}
.box2
{
  position: absolute;
  top:60%;
  left:50%;
  transform:translate(-50%,-50%);
  width:400px;
  padding: 10px 20px;
  background: rgba(0,0,0,.8);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius:40px;
}
.box3
{
  position: absolute;
  top:60%;
  left:80%;
  transform:translate(-50%,-50%);
  width:400px;
  padding: 10px 20px;
  background: rgba(0,0,0,.8);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius:40px;
}
.box1
{
  position: absolute;
  top:15%;
  left:50%;
  transform:translate(-50%,-50%);
  width:800px;
  padding: 10px 20px;
  background: rgba(0,0,0,.8);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius:20px;
  color:#fff;
  size:4;
}
.box h1
{  
   margin:0 0 30px;
   padding:0;
   color:#fff;
   text-align:center;
}

.box p
{  
   margin:0 0 30px;
   padding:0;
   color:#fff;
   text-align:center;
}
.box3 input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.box2 input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
#ph
{
  outline:0px;
  width:130px;
  padding:10px;
  border-radius:20px;
}


</style>
</head>
<body>
<img src="img/11.png"; style="opacity:0.8;filter:alpha(opacity=40)"; height=20%; width=10%; align="left">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
<font color="pink" size="7" style="Bold" face="Arial">WASTE RESOURCE TO POWER ENERGY</font>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="box1">
  	<!-- notification message -->
  
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<font color="yellow" size="4" style="Bold" face="Arial">User name is:</font><strong><?php echo $_SESSION['username']; ?></strong></font>
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <font color="green" size="4" style="Bold" face="Arial">LOG_IN IS SUCCESS</font>
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<a href="officlogin.php?logout='1'"><font color="yellow" size="4" style="Bold" face="Arial">logout</font></a>
    <?php endif ?>
	
</div>
<br><br>
<div class="box">
<center><font color="silver" size="6" style="Bold" face="Arial">IMPORT WASTE</font></center>
<form method="post" action="importserver.php">
<select id="ph" name="vehicaltype" ><option>MINI AUTO</option><option>TEMPO</option><option>TRUCK</option></select>
<lable>&nbsp;&nbsp;&nbsp;<font color="orange" size="4" style="Bold" face="Arial">VEHICLE NUMBER</font></lable>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="vehiclenum" align="left"><br><br>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">TYPE OF WASTE(DRY,WET)</font></lable>
<center><input type="text" name="typewast" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">NET WEIGHT OF WASTE IMPORTED</font></lable>
<center><input type="text" name="netweight" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">TIME OF IMPORT(Eg:7.50AM)</font></lable>
<center><input type="text" name="time" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">FROM WHICH LOCATION</font></lable>
<center><input type="text" name="location" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">DUMPING LOCATION</font> </lable>
<center><input type="text" name="dumplocation" ><br><br><br></center>
<center><input type="submit" name="imp"  value="SUBMIT"></center>
</form>
</div>
<div class="box2">
<center><font color="silver" size="6" style="Bold" face="Arial">POWER GENERATED </font></center><br><br>
<form method="post" action="importserver.php">
<lable><center><font color="orange" size="4" style="Bold" face="Arial">TYPE OF WASTE USED(DRY,WET)</font></lable>
<center><input type="text" name="tpywast" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">NET WEIGHT OF WASTE USED</font></lable>
<center><input type="text" name="ntwwast" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">POWER GENERATED IN UNIT </font></lable>
<center><input type="text" name="punit" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">DATE OF GENERATION(Eg:12-nov-2018)</font></lable>
<center><input type="text" name="date" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">LOCATION TO BE STOCKED</font></lable>
<center><input type="text" name="stocklocation" ><br><br></center>
<center><input type="submit" name="powergenarated"  value="SUBMIT"><br><br></center>
<center><input type="submit" name="supplypower" value="SUPPLY POWER EVENT/PUBLIC USE"></center>
</form>

</div>
<div class="box3">
<br><br>
<form method="post" action="display.php">
<br><br><br><br>
<center><a href="stockofwaste.php"><font color="yellow" size="4"><b>WASTE IN STOCK</b></font></a></center><br><br><br>
<center><a href="stockofpower.php"><font color="yellow" size="4"><b>POWER IN STOCK</b></font></a></center><br><br><br>
<center><a href="requestdetails.php"><font color="yellow" size="4"><b>REQUESTED POWER DETAILS</b></font></a></center><br><br><br>
<center><a href="supllieddetail.php"><font color="yellow" size="4"><b>SUPPLIED POWER DETAILS</b></font></a></center><br><br><br><br><br><br><br>
</form>
</div>

</div>
</body>
</html>