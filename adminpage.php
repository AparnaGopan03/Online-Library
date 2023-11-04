<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adstyle.css">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>
    <title>Document</title>
</head>
<body>
    <nav>
        <div>
            <span>LIBRARY</span><br>
            <span class="head">MANAGEMENT SYSTEM</span>
            
        </div>
        <div>
            <button class="btn btn-danger logout" ><a href="home.php">Log Out</a></button>
        </div>

    </nav>
    <div class="conatiner"><br>
        <h3><b>ADMIN DASHBORD</b></h3><br>
        <div class="items">
            <button><a href="insert.php">
                <div class="item">
                    <div class="blocks">
                        <i class="fas fa-book fa-4x text-primary"></i><br>
                    <span>Add Book</span>
                    </div>
                </div></a>
            </button>
        
       
            <button><a href="delete.php">
                <div class="item">
                    <div class="blocks">
                        <i class="fas fa-trash fa-4x text-danger"></i><br>
                    <span>Delete Books</span>
                    </div>
                </div></a>
            </button>
       
    
            <button><a href="update.php">
                <div class="item">
                    <div class="blocks">
                        <i class="fas fa-cogs fa-4x text-success"></i><br>
                        <span>Update Books</span>
                    </div>
                </div></a>
            </button>

            <button><a href="search.php">
                <div class="item">
                    <div class="blocks">
                        <i class="fas fa-search fa-4x text-warning"></i><br>
                    <span>Search Books</span>
                    </div>
                </div></a>
            </button>
           
        </div> <br><br>
        <div class="items2">
            
        
        
            <button><a href="bookdetail.php">
                <div class="item">
                    <div class="blocks">
                        <i class="fas fa-book-open fa-4x text-success"></i><br>
                        <span>Books Records</span>
                    </div>
                </div></a>
            </button>
       
            <button><a href="userdetail.php">
                <div class="item">
                
                    <div class="blocks">
                        <i class="fas fa-user-friends fa-4x text-warning"></i><br>
                    <span>User Records</span>
                    </div>
                    
                </div></a>
            </button>
        
    </div>
    
    
</body>
</html>