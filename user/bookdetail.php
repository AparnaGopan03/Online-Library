<html>
<head>

 

 <link rel="stylesheet" href="main.css">

</head>
<body>
<div class="filter">

 </div>
    
    
   
 
    <?php
        include("dbconnect.php");
 
        
 
        $query = "select * from books";
        $result = mysqli_query($con,$query);
      echo "<table><tr><th colspan=5>BOOK RECORDS</th></tr><tr><th>ISBN</th><th>Title</th><th>Author</th><th>Publication</th><th>Status</th></tr>";
    while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
}
echo "</table>";


    ?>
    
</body>
</html>