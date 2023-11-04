<html>
<body bgcolor="#008080">
    <center><h2>Library Management System</h2></center>
    <br>
 
    <?php
        include("dbconnect.php");
 
        $isbn=$_POST["isbn"];
        $title=$_POST["title"];
        $author=$_POST["author"];
        $publication=$_POST["publication"];
         $status=$_POST["status"];
 
        $query = "insert into books(ISBN,Title,Author,Publication,Status) values('$isbn','$title','$author','$publication','$status')";
        $result = mysqli_query($con,$query);
    ?>
    <h3> Book information is inserted successfully </h3><br><br>
    <h3><a href="adminpage.php" style="text-decoration:none">Back to dashboard </a></h3>
    
 
</body>
</html>