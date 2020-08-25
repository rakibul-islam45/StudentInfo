
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>admin</title>

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

$server = "127.0.0.1";
$dbname = "studentInfo";
$user = "rakib";
$pass = "rakibul";
//$DBCon = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);

try {
    $DBCon = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    $DBCon->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch (Throwable $t){
    echo 'Cannot Connect to Database';
    die;
}


?>

<div class="container">
    <form>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Id</th>
                <th>Session</th>
                <th>Department</th>
                <th>Blood Group</th>
                <th>Phone No</th>
                <th>Home Town</th>
                <th>Email</th>
                <th>Action</th>

            </tr>
            <?php
            $query = 'select * from register';
            $sth = $DBCon->prepare($query);
            $sth->execute();
            $data = $DBCon->query($query)->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <?php foreach ($data as $value): ?>
            <tr>
                <td><?php echo $value['Name'] ?></td>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['Session'] ?></td>
                <td><?php echo $value['Department'] ?></td>
                <td><?php echo $value['bloodgroup'] ?></td>
                <td><?php echo $value['PhoneNo'] ?></td>
                <td><?php echo $value['HomeTown'] ?></td>
                <td><?php echo $value['Email'] ?></td>
                <td><?php echo $value['btn'] ?></td>
            </tr>

            <?php endforeach; ?>

        </table>
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
