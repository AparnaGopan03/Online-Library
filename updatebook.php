<html>
<body bgcolor="#008080">
    <center><h2>Library Management System</h2></center>
    <br>
 
    <?php
        include("dbconnect.php");
 
        $isbn=$_POST["isbn"];
        $status=$_POST["status"];
 
        $query = " UPDATE books SET status='$status' WHERE isbn='$isbn' ";
        $result = mysqli_query($con,$query);
    ?>
    <h3> Book status is updated successfully </h3>
 
    <h3><a href="adminpage.php" style="text-decoration:none">Back to dashboard </a></h3>
 
</body>
</html>