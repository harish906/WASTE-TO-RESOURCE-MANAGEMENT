<?php include('server.php');?>
<html>
<head>		
   <title>Sign_up</title>
   <link rel="icon" type="img/png" href="img/11.png"/>
  <style type="text/css">
body
{
background:url('img/2.gif');
background-position:center;
background-size:cover;
height=100%; width=100%;
background-repeat:no-repeat;
}

.simple_form
{
   text-align:center;
   margin:0px 400px;
   border-radius:10px;
}
#registration
{
   width:100%;
   background-color:#051019;
   opacity:0.8;
   padding:50px 0px;
}
#button
{
  width:250px;
  padding:10px;
  border-radius:5px;
  outline:0px;
}

#ph
{
  outline:0px;
  width:80px;
  padding:10px;
  border-radius:5px;
}
#phone
{
  outline:0px;
  width:200px;
  padding:10px;
  border-radius:5px;
}
#but
{
  color:white;
  font-size:18px;
}
#butt
{
  width:250px;
  padding:10px;
  border-radius:10px;
  outline:0px;
  background-color:#0c6996;
  border:2px solid #01010c;
  color:aliceblue;
  font-size:18px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: 60px;
    left: calc(50% - 50px);
}
.simple_form h1
{  
   margin:30px;
   padding:0;
   color:#fff;
   text-align:center;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
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

<a href="login.php"><font color="yellow" size="4"><b>Log In Public</b></font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="home.php"><font color="yellow" size="4"><b>Home</b></font></a> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="contact.php"><font color="yellow" size="4"><b>Contact Us</b></font></a>


  <div class="simple_form">
     
      
    <form id="registration" method="post" action="signup.php">
         <img src="img/avatar.png" class="avatar">
         <h1>Sign up Public</h1>
         <input type="text" name="fname" id="button" placeholder="Enter your First Name" value="<?php echo $fname; ?>">
         <input type="text" name="lname" id="button" placeholder="Enter your Last Name" value="<?php echo $lname; ?>"><br><br>
         <input type="text" name="Aadhaar" id="button" placeholder="Enter your Aadhaar number" value="<?php echo $Aadhaar; ?>">
         <input type="text" name="email" id="button" placeholder="Enter your Email address" value="<?php echo $email; ?>"><br><br>
         <input type="text" name="username" id="button" placeholder="Enter your User name" value="<?php echo $username; ?>">
         <input type="password" name="password" id="button" placeholder="Enter your Password" value="<?php echo $password; ?>"><br><br>
         <input type="text" name="age" id="button" placeholder="Enter your Age" value="<?php echo $age; ?>">
         <input type="text" name="address" id="button" placeholder="Enter your Address" value="<?php echo $address; ?>"><br><br>   
         
          <select id="ph" name="phoneCode"><option>+91</option><option>+81</option><option>+61</option><option>+71</option><option>+21</option>
          <option>+92</option><option>+93</option></select>
          <input type="number" name="num" placeholder="Enter your Mobile Number" id="phone" value="<?php echo $num; ?>"><br><br>
          <input type="radio" name="gender" id="rd" value="m">&nbsp;&nbsp;&nbsp;<span id="but">&nbsp;Male</span>&nbsp;&nbsp;
          <input type="radio" name="gender" id="rd" value="f">&nbsp;&nbsp;<span id="but">&nbsp;FeMale</span><br><br>
          <input type="submit" name="register" value="Register" id="butt">
		  <?php include('errors.php'); ?>
      </form>
   </div>
</body>   
</html>