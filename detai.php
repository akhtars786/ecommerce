<?php


include("connection.php");

$delId=$_GET['delId'];

$query = "SELECT * FROM info WHERE Id=$delId";
$result = mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);
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
        /* styles.css */

table {
    width: 100%;
}

/* Set font family and size for table headers */
th {
    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    background-color: #f2f2f2;
    padding: 10px; /* Increased padding for better readability */
}

/* Set font family and size for table cells */
td {
    font-family: Arial, sans-serif;
    font-size: 14px;
    padding: 8px; /* Increased padding for better readability */
}

/* Style for alternating row colors */
tr:nth-child(even) {
    background-color: #f9f9f9; /* Lighter gray background for even rows */
}

/* Style for hover effect on rows */
tr:hover {
    background-color: orchid; /* Darker gray background on hover */
    color: black; /* White text color on hover */
}

/* Style for action links */
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
    height: 520px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
}
img{
    height: 400px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}



h2{
    padding: 10px;
    background-color: purple;
    color: black;
    font-weight: bolder;
text-align: center  ;
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


<h2><?php echo $row['Brand']?> The Quality Products</h2>
 

<div>
    <div class="pic" style="width:25%; float:left;">
        <img src="images/<?php echo $row['file']?>" alt="" >
    </div>
    
    <!-- <div class="trailer" style="width:75%; float:left;">
        <iframe src="<?php echo $row['']?>"
          width="1300" height="400"  frameborder="0"></iframe>
    </div>
     -->
</div>
    <!-- <h2>Shirt Detail</h2> -->
    <table width=100%>
      
        <tr>
            <th>Brand</th>
            <th><?php echo $row['Brand']?></th>
        </tr>

        <tr>
            <th>Shirt Category</th>
            <th><?php echo $row['Type']?></th>
        </tr>

        <tr>
            <th>Size</th>
            <th><?php echo $row['Size']?></th>
        </tr>

        <tr>
            <th>Color</th>
            <th><?php echo $row['Color']?></th>
        </tr>

        <tr>
            <th>Price</th>
            <th><?php echo $row['Price']?></th>
        </tr>

        <tr></tr>
        
<td colspan=2>
    <a href="index.php" style="padding:10px; background-color:green;color:white;text-decoration:none;">Back To Home</a>

</td>    
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>                             