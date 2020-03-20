<!doctype html>
<html lang="en">
<head>
    <title>Visitor Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="wrap">

    <header role="banner">


        <div class="container logo-wrap">
            <div class="row pt-3">
                <div class="col-12 text-center">
                    <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                    <h1 class="site-logo"><a href="index.php">Visitor Management</a></h1>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md  navbar-light bg-light">
            <div class="container">


                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <?php
                        ///session_start();
                        if(!isset($_SESSION['login_user'])){
                            ?>
                            <li><a class="nav-link" href="login.php">Login</a></li>
                            <li><a class="nav-link"href="contact.php">Contact</a></li>
                        <?php }else{
                            ?>
                            <li><a class="nav-link" href="add-visitor.php">Add visitor</a></li>
                            <li><a class="nav-link" href="visitor-report.php" target="_blank">Visitor Report</a></li>
                            <li><a class="nav-link" href="feedback_management.php">Feedback</a></li>
                            <li><a class="nav-link" href="search.php">Search</a></li>
                            <li><a class="nav-link" href="user-report.php">User Management</a></li>
                            <li><a class="nav-link" href="account.php">My Account</a></li>
                            <li><a class="nav-link" href="change-password.php">Change Password</a></li>
                            <li><a class="nav-link" href="includes/main.php?action=logout">Logout</a></li>
                            <?php
                        }
                        ?>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

