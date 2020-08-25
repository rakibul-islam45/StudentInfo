<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="Bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Bootstrap/css/heroic-features.css" rel="stylesheet">

</head>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Stduent Information</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
//class login{
//    public $name, $id;
//    public function __construct($name, $id){
//        $this->name = $name;
//        $this->id = $id;
//    }
//}

?>
<div class="login">
    <form id="login" method="post" action="action.php">
        <label><b>User Name
            </b>
        </label>
        <input type="text" name="Uname" id="Uname" placeholder="Username">
        <br><br>
        <label><b>Password
            </b>
        </label>
        <input type="text" name="id" id="id" placeholder="id">
        <br><br>
        <input type="submit" name="log" id="log" value="Log In Here">


    </form>
</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="Bootstrap/vendor/jquery/jquery.min.js"></script>
<script src="Bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



</html>