<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>search</title>

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
<body>

<form style="margin: 10px" action="search.php" method="post">
    Search: <input type="text" name="search" /><br />
    <input type="submit" value="Submit" />
</form>

<?php
$server = "127.0.0.1";
$dbname = "studentInfo";
$user = "rakib";
$pass = "rakibul";
$pdo = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);

try {
    $pdo = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (Throwable $t){
    echo 'Cannot Connect to Database';
    die;
}

?>



<?php
if (!empty($_REQUEST['search'])) {

    $search =$_REQUEST['search'];

    $query = "SELECT * FROM register WHERE Name LIKE '%" . $search . "%'";
    $sth = $pdo->prepare($query);
    $sth->execute();
    $data = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

    foreach ($data as $value):

        echo '<form style="margin: 10px"> Name: ' . $value['Name'] .'</form>';
        echo '<form style="margin: 10px"> ID: ' . $value['Id'] .'</form>';
        echo '<form style="margin: 10px"> Session: ' . $value['Session'] .'</form>';
        echo '<form style="margin: 10px"> Department: ' . $value['Department'] .'</form>';
        echo '<form style="margin: 10px"> Blood Group: ' . $value['bloodgroup'] .'</form>';
        echo '<form style="margin: 10px"> Phone No: ' . $value['PhoneNo'] .'</form>';
        echo '<form style="margin: 10px"> Email: ' . $value['Email'] .'</form>';
        echo '<form style="margin: 10px"> Home Town: ' . $value['HomeTown'] .'</form>';
    endforeach;
} else{
    echo 'No data found';
}
?>




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

</body>

</html>
