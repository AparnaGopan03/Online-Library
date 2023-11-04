<html>
<head>

 

 <link rel="stylesheet" href="mainad.css">

</head>
<body>
    
    <div class="filter">

 </div>

    <center><h2>SEARCH RESULT</h2></center>
  
 
    <?php
        include("dbconnect.php");
 
        
   $search=$_POST["isbnauth"];
        $query = "select * from books where title='$search' or author='$search' ";
        $result = mysqli_query($con,$query);
      echo "<table border=1><tr><th>ISBN</th><th>Title</th><th>Author</th><th>Publication</th><th>Status</th></tr>";

    while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
}

echo "</table>";


    ?>
    
  
 
</body>
</html>