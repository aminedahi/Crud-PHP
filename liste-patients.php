
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <?php
    include "connection.php";
    $stm = $conn->prepare('SELECT * FROM patients'); 
    $stm->execute();
    echo '<h1 class="text-center tw">List Of Users</h1>';
    echo '<table class="table table-success table-striped mt-5 container text-center" ><tr class="tr1"><th scope="col" >Lastname</th><th scope="col" >Firstname</th><th scope="col" >Birthdate</th><th scope="col" >phone</th><th scope="col" >mail</th><th scope="col" >Details</th></tr>';
    while ($srt=$stm->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td  scope='row'>".$srt["lastname"]."</td>";
        echo "<td>".$srt['firstname']."</td>";
        echo "<td>".$srt['birthdate']."</td>";
        echo "<td>".$srt['phone']."</td>";
        echo "<td>".$srt['mail']."</td>";
        echo "<td>"."<a href='profil-patient.php' class='btn btn-primary stretched-link'> "."afficher".'</a>'."</td>";
    };
    echo "</table>";

?>

</body>
</html>