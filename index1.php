<?php
require ('controllers/VejrData.php');
require ('controllers/DateTime.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/styles.css">
    <title></title>
</head>
<body>

<div class="container"><!--Alex's Container-->
    <div class="row">
        <section class="col-12">
            <nav class="navbar navbar-inverse fixed-top bg-success inverse justify-content-center navbar-toggleable-sm">
                <div class="container">
                    <button class="navbar-toggler navnbar-toggler-right" type="button" data-toggle="collapse"
                            data-target="#myContent" aria-controls="myContent" aria-expanded="false"
                            aria-label="Toggle Navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="#" class="navbar-brand">Info Screen</a>

                    <div class="collapse navbar-collapse" id="myContent">
                        <div class="navbar-nav mr-auto ml-3">
                            <a class="nav-link active nav-item" href="index1.php">Home</a>
                            <a class="nav-link active nav-item disabled" href="#">Rooms</a>
                            <a class="nav-link disabled nav-item disabled" href="#">About Us</a>
                            <a class="nav-link disabled nav-item disabled" href="#">Settings</a>
                        </div> <!--Navbar-nav-->

                        <form class="form-inline align-middle">
                            <input class="form-control mr-2" placeholder="Search">
                            <button class="btn">GO</button>
                        </form>

                    </div>
                </div> <!--Container-->
            </nav>
        </section>
    </div>




    <!-- NF Making push to git testytest -->


</div><!-- CONTAINER-->

<div class="container">
    <section style="margin: 64px">
        <?php
                VejrData();
            ?>
    </section>
</div><!-- Nicki -->

<div>
    <section style="margin: 200px">
        <?php
DateTime();
?>
    </section>
</div><!-- Frede -->



<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>