<html>
<head>
<style>

body {
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


input[type=reset] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=reset]:hover {
  background-color: #45a049;
}


</style>
</head>
<body background="https://thumbs.dreamstime.com/b/open-book-stack-books-open-book-stack-books-reading-learning-education-concept-panorama-good-copy-space-120469473.jpg">
    <center><h2>Library Management System</h2></center>
    <form action="updatebook.php" method="post">
 
        <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
            <td> Enter ISBN :</td>
            <td> <input type="text" name="isbn" size="48"> </td>
            <tr>
            <td> Enter Status :</td>
            <td> <input type="text" name="status" size="48"> </td></tr>
<tr>
            <td colspan=1>
            <input type="reset" value="Reset">
</td>
<td>
            <input type="submit" value="Submit">
            </td>           

            </tr>
            
        </table>
    </form>
</body>
</html>