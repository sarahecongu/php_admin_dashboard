<?php
require_once('./connection/connect.php');


$sql = "SELECT COUNT(*) AS total_assets FROM assets";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$total_assets = $result['total_assets'];

// users
$sql = "SELECT COUNT(*) AS total_users FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$total_users = $result['total_users'];

$sql = "SELECT COUNT(*) AS total_category FROM categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$total_category = $result['total_category'];
?>
<?php 
           include("./includes/header.php");
           ?>
<body>
    <!-- Sidebar Navigation -->
    <div class="container-fluid">
        <div class="row">

           <?php 
           include("./includes/sidebar.php");
           ?>

            <div class="main-content col-md-9 ml-sm-auto col-md-10 px-md-4  ">
                <div class="header bg-gradient">
                    <h2 class="text-center">Welcome to Admin Dashboard</h2>
                </div>

                <!-- Summary section -->
                <div class="summary bg-dark.bg-gradient">
                    <h3 class="text-center mb-3">Summary</h3>
                    <div class="summary-cards">
                        <div class="summary-card bg-warning">
                            <i class="fas fa-users summary-icon text-white"></i>
                            <div class="summary-text">
                                <h4 class="text-white">Total Users</h4>
                                <p class="text-white"><?php echo $total_users; ?></p>
                            </div>
                        </div>
                        <div class="summary-card  bg-success">
                            <i class="fas fa-boxes summary-icon text-white"></i>
                            <div class="summary-text">
                                <h4 class="text-white">Total Assets</h4>
                                <p class="text-white"><?php echo $total_assets; ?></p>
                            </div>
                        </div>
                        <div class="summary-card ">
                            <i class="fas fa-list-ul summary-icon"></i>
                            <div class="summary-text">
                                <h4>Total Categories</h4>
                                <p><?php echo $total_category; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="content-section" id="dynamic-content">
            <?php 
        //    include("includes/asset.php");
           ?>

            </div>
        </div>
    </div>
</div>
    <?php 
           include("./includes/footer.php");
           ?>

 