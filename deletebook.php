<html>
<body bgcolor="#008080">
    <center><h2>Library Management System</h2></center>
    <br>
 
    <?php
        include("dbconnect.php");
 
        $isbn=$_POST["isbn"];
        
 
        $query = "delete from books where ISBN='$isbn' ";
        $result = mysqli_query($con,$query);
    ?>
    <h3> Book information is deleted successfully </h3>
 <h3><a href="adminpage.php" style="text-decoration:none">Back to dashboard </a></h3>
    
 
</body>
</html>