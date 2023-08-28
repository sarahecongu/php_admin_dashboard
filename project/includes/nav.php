<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-secondary">
    <a class="navbar-brand text-white" href="#" >Epicle</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item text-white">
            <a href="./server/logout.php?logout=true" class="btn btn-danger float-end"
                onclick="return confirm('Are you sure you want to log out?')">Logout</a>
                
            </li>
            
        </ul>
    </div>
</nav>