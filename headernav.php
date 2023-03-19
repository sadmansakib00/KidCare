<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-color-change">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="resources/kidcare-high-resolution-logo-white-on-transparent-background.png" alt="Bootstrap" width="150" height="45">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact</a>
                </li>
            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form> -->
            <?php
                if(!isset($_SESSION['email'])) {
                    echo "<a class=\"btn btn-outline-light\" role=\"button\" href=\"/KidCare/login.php\">Login</a>";
                } else {
                    echo "<a class=\"btn btn-outline-light\" role=\"button\" href=\"/KidCare/logout.php\">Logout</a>";
                }
            ?>
        </div>
    </div>
</nav>
