<?php include('server.php');?>
<html>
<head>
    <meta charset="utf-8">
     <title>log_in</title>
     <link rel="icon" type="img/png" href="img/11.png"/>
     <link rel="stylesheet" >
<style type="text/css">
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
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  width:400px;
  padding: 50px 30px;
  background: rgba(0,0,0,.8);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius:10px;
  color:#fff;
}
.box h1
{  
   margin:0 0 30px;
   padding:0;
   color:#fff;
   text-align:center;
}
.box .inputBox
{
  position:relative;
}
.box .inputBox input
{
  width: 100%;
  padding:10px 0;
  font-size:16px;
  color:#fff;
  letter-spacing: 1px;
  margin-bottom:30px;
  border:none;
  border-bottom:1px solid #fff;
  outline:none;
  background:transparent;
}
.box .inputBox label
{
  position: absolute;
  top: 0;
  left: 0;
  padding:10px 0;
  font-size:16px;
  color:#fff;
  letter-spacing: 1px;
  pointer-events:none;
  transition: .5s;
}
.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label
{
  top: -18px;
  left: 0;
  color:#03a9f4;
  font-size:12 px;
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

.box input{
    width: 100%;
    margin-bottom: 20px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
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

<a href="home.php"><font color="yellow" size="4"><b>Home</b></font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="signup.php"><font color="yellow" size="4"><b>Sign Up Public</b></font></a> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="contact.php"><font color="yellow" size="4"><b>Contact Us</b></font></a>
<br><br><br>


   <div class="box">
      <img src="img/avatar.png" class="avatar">
      <h1>Login Public</h1>
         <form method="post" action="login.php">
            <div class="inputBox">
              <input type="text" name="username" required="">
              <label>Username</lable>
            </div>

            <div class="inputBox">
          <input type="password" name="password" required="">
              <label>password</lable>
            </div>
              <input type="submit" name="Log_In" value="Log_In">
			 
          </form>
		  <?php include('errors.php'); ?> 

   </div>

</body>
</html>
