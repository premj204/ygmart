<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "$title"; ?></title>
    <link rel="shortcut icon" href="./assets/img/logo/yg-mart-pvt-ltd.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="./assets/img/logo/yg-mart-pvt-ltd.png" alt="YG Mart India Pvt. Ltd" class="logo"></a>
        <button class="navbar-toggler mb_toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <i class="fa-brands fa-squarespace text-white"></i>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="./assets/img/logo/yg-mart-pvt-ltd.png" alt="YG Mart India Pvt. Ltd" class="mb_logo"></h5>
                <button type="button" class="text-dark btn border" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if($nav=='home'){ echo "nav-active"; } ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($nav=='about'){ echo "nav-active"; } ?>" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown"> <!-- Added dropdown class here -->
                        <a class="nav-link dropdown-toggle <?php if($nav=='kit'){ echo "nav-active"; } ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kit</a>
                        <ul class="dropdown-menu custom_drop" aria-labelledby="navbarDropdown"> <!-- Dropdown menu -->
                            <li><a class="dropdown-item" href="paydirect-card.php">PayDirect Card</a></li>
                            <li><a class="dropdown-item" href="studentn-card.php">Student Prepaid Card</a></li>
                            <!-- Add more categories as needed -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($nav=='business'){ echo "nav-active"; } ?>" href="business.php">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($nav=='contact'){ echo "nav-active"; } ?>" href="contact.php">Contact</a>
                    </li>
                </ul>
                <div class="login_bttn">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="login.php" class="btn">Login</a>
                        <a href="register.php" class="btn">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
