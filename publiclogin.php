<?php include('server.php');?>
<?php include('requestserver.php');?>
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
  top:57%;
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
  top:55%;
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
  top:55%;
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
    	<a href="publiclogin.php?logout='1'"><font color="yellow" size="4" style="Bold" face="Arial">logout</font></a>
    <?php endif ?>
	
</div>
<br><br>
<div class="box">
<center><font color="silver" size="6" style="Bold" face="Arial">REQUEST FOR POWER</font></center><br>
<form method="post" action="requestserver.php">
<lable><center><font color="orange" size="4" style="Bold" face="Arial">EVENT NAME</font></lable>
<center><input type="text" name="eventname"><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">DATE(Eg:12-nov-2018)</font></lable>
<center><input type="text" name="date" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">TIME(Eg:7.50AM)</font></lable>
<center><input type="text" name="time" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">LOCATION</font></lable>
<center><input type="text" name="location" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">POWER REQUIRED IN UNIT</font> </lable>
<center><input type="text" name="unitpower" ><br><br></center>
<center><input type="submit" name="reqsubmit"  value="SUBMIT"><br><br></center>
</form>
</div>
<div class="box2">
<center><font color="silver" size="6" style="Bold" face="Arial">WASTE TO DUMP</font></center><br><br>
<form method="post" action="requestserver.php">
<lable><center><font color="orange" size="4" style="Bold" face="Arial">TYPE OF WASTE(DRY,WET)</font></lable>
<center><input type="text" name="typewast" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">NET WEIGHT</font></lable>
<center><input type="text" name="netweight" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">LOCATION</font></lable>
<center><input type="text" name="location" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">NAME OF THE PERSON TO CONTACT</font></lable>
<center><input type="text" name="fname" ><br><br></center>
<lable><center><font color="orange" size="4" style="Bold" face="Arial">CONTACT NUMBER</font></lable>
<center><input type="text" name="pnumber" ><br><br></center>
<center><input type="submit" name="wastdump"  value="SUBMIT"><br><br></center>
</form>

</div>
<div class="box3">
<br>
<form method="post" action="">
<br><br>
<center><a href="stockofwaste.php"><font color="yellow" size="4"><b>WASTE IN STOCK</b></font></a></center><br><br><br><br><br>
<center><a href="stockofpower.php"><font color="yellow" size="4"><b>POWER IN STOCK</b></font></a></center><br><br><br><br><br><br>
<center><a href="supllieddetail.php"><font color="yellow" size="4"><b>SUPPLIED POWER DETAILS</b></font></a></center><br><br><br><br><br><br>
</form>
</div>
</body>
</html>