<?php
session_start();

// Check if the user is logged in
// if (!isset($_SESSION['user'])) {
//     header('Location: login.php'); 
//     exit();
  
// }




?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Example</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .image{
    background-image: url('https://img.freepik.com/premium-photo/interior-background-contemporary-shelves-wall-desktop-apartment-design-computer-living-generative-ai_163305-172176.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 500px;
    background-attachment: fixed

   
}
    </style>
</head>
<body class="image">
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
    <a class="navbar-brand text-white" href="#">Epicle</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="">Services</a>
            </li>
            <li class="nav-item">
            
                                <a href="./server/logout.php?logout=true" class="btn btn-danger float-end"
                                    onclick="return confirm('Are you sure you want to log out?')">Logout</a>
                
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="text-center text-white mb-4">Welcome to Epicle SMC Ug</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h3>Users</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary" href="users.php"><i class="fas fa-users"></i> Manage Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h3>Categories</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-secondary" href="create_category.php"><i class="fas fa-folder"></i> Manage Categories</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h3>Assets</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-success " href="create_asset.php"><i class="fas fa-cube"></i> Manage Assets</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h3>User Assets</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-success " href="create_user_asset.php"><i class="fas fa-cube"></i> Manage user Assets</a>
                </div>
            </div>
        </div>
    </div>
</div>


</html>
