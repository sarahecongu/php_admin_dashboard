<?php
include("./server/active.php");
include("includes/header.php");
?>
<aside class="col-md-4 col-lg-2 d-md-block sidebar fixed-top mb-3 h-100 nav-sidebar">
    <!-- Your existing sidebar code here -->
</aside>

<aside class="col-md-4 col-lg-2 d-md-block sidebar fixed-top mb-3 h-100">
    <ul class="nav flex-column">
        <div class="profile">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/020/765/399/small/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg"
                alt="Profile Picture" class="profile-pic">
            <h3>Sarah E.A</h3>
        </div>

        <ul class="nav flex-column bg-dark">
            <li class="nav-item <?php if ($activePage === 'dashboard')
                echo 'active'; ?>">
                <a class="nav-link <?php if ($activePage === 'dashboard')
                    echo 'bg-primary text-white'; ?>"
                    href="dashboard.php">
                    <i class="bi bi-house-door "></i> Dashboard
                </a>
            </li>
            <li class="nav-item dropdown <?php if ($activePage === 'categories')
                echo 'active'; ?>">
                <a class="nav-link dropdown-toggle <?php if ($activePage === 'categories')
                    echo 'bg-primary text-white'; ?>"
                    href="categories.php" id="navbarDropdown2" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-list"></i> Categories
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown2">
                    <li><a class="dropdown-item <?php if ($activePage === 'categories')
                        echo 'active'; ?>"
                            href="categories.php">View Categories</a></li>
                    <li><a class="dropdown-item" href="add_category.php">Add Category</a></li>
                    <li><a class="dropdown-item" href="update_category.php">Update Category</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown <?php if ($activePage === 'assets')
                echo 'active'; ?>">
                <a class="nav-link dropdown-toggle <?php if ($activePage === 'assets')
                    echo 'bg-primary text-white'; ?>"
                    href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-box"></i> Assets
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown2">
                    <li><a class="dropdown-item <?php if ($activePage === 'assets')
                        echo 'active'; ?>"
                            href="assets.php">View Assets</a></li>
                    <li><a class="dropdown-item" href="add_asset.php">Add Assets</a></li>
                    <li><a class="dropdown-item" href="update_asset.php">Update Assets</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown <?php if ($activePage === 'users')
                echo 'active'; ?>">
                <a class="nav-link dropdown-toggle <?php if ($activePage === 'users')
                    echo 'bg-primary text-white'; ?>"
                    href="users.php" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i> users
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown2">
                    <li><a class="dropdown-item <?php if ($activePage === 'users')
                        echo 'active'; ?>"
                            href="users.php">View Users</a></li>
                    <li><a class="dropdown-item" href="users_add.php">Add Users</a></li>
                    <li><a class="dropdown-item" href="users_update.php">Update Users</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown <?php if ($activePage === 'user_asset')
                echo 'active'; ?>">
                <a class="nav-link dropdown-toggle <?php if ($activePage === 'user_asset')
                    echo 'bg-primary text-white'; ?>"
                    href="user_asset.php" id="navbarDropdown3" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-person-plus"></i> User Asset
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown3">
                    <li><a class="dropdown-item <?php if ($activePage === 'user_asset')
                        echo 'active'; ?>"
                            href="user_asset.php">View User Assets</a></li>
                    <li><a class="dropdown-item" href="add_user_asset.php">Add User Asset</a></li>
                    <li><a class="dropdown-item" href="update_user_asset.php">Update User Asset</a></li>
                </ul>
            </li>
            <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link" href="login.php">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </li>
            </li>
        </ul>
</aside>
