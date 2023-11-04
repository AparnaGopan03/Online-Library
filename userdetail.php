<html>
<head>

 

 <link rel="stylesheet" href="mainad.css">

</head>
<body>
    
    <div class="filter">

 </div>
    
    
    <?php
        include("dbconnect.php");
 
        
 
        $query = "select mem_id,username,fname,lname,address from member";
        $result = mysqli_query($con,$query);
      echo "<table border=1><tr><th colspan=5>USER RECORDS</th></tr><tr><th>ID</th><th>USER NAME</th><th>FIRST NAME</th><th>LAST NAME</th><th>Email</th></tr>";
    while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
}
echo "</table>";


    ?>
    
 
</body>
</html>