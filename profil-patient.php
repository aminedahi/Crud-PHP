<?php
    include "connection.php";
    $stm = $conn->prepare('SELECT * FROM patients');
    $stm->execute();
    echo '<div class="card m-5" >';
    echo ' <div class="card-body">
            <h5 class="card-title bg-light p-5">People</h5>
            </div>';
    echo ' <div class="card-body">';
    while ($srt=$stm->fetch(pdo::FETCH_ASSOC)){
        echo "<ul><li  scope='row'>".$srt['id']."</li>";
        echo "<li> ne le :".$srt['birthdate']."</li>";
        echo "<li> Telephone".$srt['phone']."</li>";
        echo "<li>E-mail".$srt['mail']."</li>";
        echo '<li  ><a  class="btn btn-outline-danger" name="edit" href="edit.php?id='.$srt['id'].'">Edit</a>
        <a class="btn btn-outline-info" href="delete.php?id='.$srt['id'].'">Delete</a></li></ul>';
    };
    echo'</div>';
    echo "</div>"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

</body>
</html> 