<?php
include_once("connection.php");

$query="SELECT * FROM info";
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shirt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to bottom, #4e54c8, #8f94fb);
            color: white;
        }

        table{
            width: 100%;
        }
        /* Additional CSS styles */
        /* Set font family and size for table headers */
        th {
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            background-color: #f2f2f2; /* Light gray background for headers */
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
            background-color: black; /* Darker gray background on hover */
            color: #fff; /* White text color on hover */
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
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background: linear-gradient(to right, #ff4b1f, #ff9068);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Shirt</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
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

<div class="container mt-5">
    <h1 class="text-center">Shirts detail</h1>
    <a href="upload.php" class="btn btn-success mb-3">Add Shirts</a>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>S.no</th>
                    <th>Image</th>
                    <th>Brand</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Modify</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $sno = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    $sno++;
                    echo "<tr>
                            <td>$sno</td>
                            <td><img src='images/{$row['file']}' style='width:70px; height:70px'></td>
                           
                            <td>{$row['Brand']}</td>
                            <td>{$row['Type']}</td>
                            <td>{$row['Size']}</td>
                            <td>{$row['Color']}</td>
                            <td>{$row['Price']}</td>
                            <td>
                                <a href='delete.php?del=$row[Id]' class='btn btn-danger'>Delete</a>
                                <a href='update.php' class='btn btn-primary'>Update</a>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
