<?php
include("connection.php");

$query = "SELECT * FROM info";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shirt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet"> <!-- Link to external CSS file -->
    <style>
      
       
table {
    width: 100%;
}


th {
    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    background-color: #f2f2f2; 
    padding: 10px; 
}

td {
    font-family: Arial, sans-serif;
    font-size: 14px;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #f9f9f9; 
}

tr:hover {
    background-color: orchid; 
    color: #fff; 
}


.action-link {
    display: inline-block;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    cursor: pointer;
}

.delete-link {
    background-color: #ff6347; 
    color: #fff; 
}

.update-link {
    background-color: #1e90ff; /* Dodger blue */
    color: #fff; /* White text color */
} 

* {
    box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
    height: 520px; 
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.1s;
    width: 100%;
}
img{
    height: 350px;
    
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}



    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background: linear-gradient(to right, #ff4b1f, #ff9068);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
</svg>
        <li class="nav-item">
       
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <!-- Search form -->
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<marquee>
<h1>Trending Shirt Collection</h1>
</marquee>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ban1.webp" class="d-block w-100" alt="Ban 1">
    </div>
    <div class="carousel-item">
      <img src="images/ban2.jpg" class="d-block w-100" alt="Ban 2">
    </div>
    <div class="carousel-item">
      <img src="images/ban3.webp" class="d-block w-100" alt="Ba 2">
    </div>
    <!-- Add more carousel items for additional bag photos -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</button>
</div>
<div class="row">
    <?php
    while($row = mysqli_fetch_assoc($result))
     {
    ?>
    <div class="column" style="background-color:#aaa;">
        <div class="card">
          <a href="detai.php?delId=<?php echo $row['Id'];?>">
           <img src="images/<?php echo $row['file'];?>" alt="Avatar" style="width:100%">
          </a>
                <div class="container">
                  <h4><b><?php echo $row['Brand'];?></b></h4>   
                  <p><?php echo $row['Price'].' - '.$row['Type'];?></p> 
                </div>
        </div>
    </div>
    
    
    
    <?php
    }
    ?>
</div>  
    


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>
