<?php
 include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 
</head>
<body>

<div id="center">
<div id="center-set"> 
<h1 align='center'>WELCOME <?php echo $loggedin_session; ?></h1>

<div id="contentbox">
<?php
$sql="SELECT * FROM member where mem_id=$loggedin_id";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="tl-4"><?php echo $rows['mem_id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
<td class="tl-4"><?php echo $rows['address']; ?></td>
</tr>
</table>

</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="paym.php" id="st-btn" style="text-decoration:none" target="_blank">Get to read books for 3 months for just Rs.2499/-</a></div>
<div id="st"><a href="search.php" id="st-btn" style="text-decoration:none">Search for books</a></div>
<div id="st"><a href="bookdetail.php" id="st-btn" style="text-decoration:none">List of Books</a></div>
<div id="st"><a href="ulogout.php" id="st-btn" style="text-decoration:none">Sign Out</a></div>
<div id="st"><a href="deleteac.php" id="st-btn" style="text-decoration:none">Delete Account</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>

</body>
</html>