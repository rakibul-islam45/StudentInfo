<?php
    session_start();
     $id = $_SESSION['id'];
    //$id = 'CE16045';
  //  var_dump($id);
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>profile</title>

    <!-- Bootstrap core CSS -->
    <link href="Bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Bootstrap/css/heroic-features.css" rel="stylesheet">

    <style type="text/css">


        .td_info1,.td_info2{
            border-width: 1px 1px 1px 1px;
            border-color: #DDDDDD;
            border-style: solid;
            padding: 10px;
            font-weight: bold;
            font-size: 14px;

        }
        .td_info1{

            width: 200px;
            text-align: right;
            background-color: #eff0f2;
            color: #588AB4;

            font-family: Tahoma, Geneva, sans-serif;
        }
        .td_info2{
            color: #60595E;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
        }
        .info_img{
            height: 100px;
            width: 100px;
            border: 1px solid #DDDDDD;
            border-radius: 5px;
        }

    </style>

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index">Stduent Information</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index">Home
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
<h1 style="text-align: center">Your Profile</h1>
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
   // $id = $_SESSION['id'];
$query = "SELECT * FROM register WHERE Id= :id LIMIT 1";
$statement = $pdo->prepare($query);
$statement->bindValue(':id', $id);
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

//var_dump($data);
?>
<?php
//foreach ($da as $data) {


?>
<div class="container">

    <div class="row">
        <div class="col-md-0"></div>
        <div class="col-md-12">


            <table width="90%">
                <tr>
                    <td class="td_info1">Name: </td>
                    <td class="td_info2"><?php echo $data[0]['Name']; ?></td>
                </tr>

                <tr>
                    <td class="td_info1">Student Photo: </td>
                    <td class="td_info2"><?php echo !isset($data[0]['Image']) ? '<img src= "./'.$data[0]['Image']. '" class="info_img"  />' : 'N/A'; ?></td>
                </tr>
                <tr>
                    <td class="td_info1">Student ID: </td>
                    <td class="td_info2"><?php echo $data[0]['Id']; ?></td>
                </tr>


                <tr>
                    <td class="td_info1">Session: </td>
                    <td class="td_info2"><?php echo $data[0]['Session']; ?></td>
                </tr>
                <tr>
                    <td class="td_info1">Department: </td>
                    <td class="td_info2"><?php echo $data[0]['Department']; ?></td>
                </tr>
                <tr>
                    <td class="td_info1">Email: </td>
                    <td class="td_info2"><?php echo $data[0]['Email']; ?></td>
                </tr>
                <tr>
                    <td class="td_info1">Phone No: </td>
                    <td class="td_info2"><?php echo $data[0]['PhoneNo']; ?></td>
                </tr>
                <tr>
                    <td class="td_info1">Blood Group: </td>
                    <td class="td_info2"><?php echo $data[0]['bloodgroup']; ?></td>
                </tr>

                <tr>
                    <td class="td_info1">Birthday: </td>
                    <td class="td_info2" type="date"><?php echo date('d-m-Y', strtotime($data[0]['Birthday'])); ?></td>
                </tr>

                <tr>
                    <td class="td_info1">Home Town: </td>
                    <td class="td_info2"><?php echo $data[0]['HomeTown']; ?></td>
                </tr>



            </table>
        </div>
</div>
  <?php
  session_destroy();
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

