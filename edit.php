<?php 
include 'connection.php';
$id=$_GET['id'];
$stm = $conn->prepare('SELECT * FROM patients WHERE id=?' );
$stm->execute(array($id));
$srt= $stm->fetch();

$lastname=$srt['lastname'];
$firstname=$srt['firstname'];
$birthdate=$srt['birthdate'];
$phone=$srt['phone'];
$mail=$srt['mail'];
if(isset($_POST['edit'])){
    $id=$_GET['id'];
        $stm=$conn->prepare("UPDATE patients  SET lastname=?,firstname=?,birthdate=?,phone=?,mail=? WHERE id=?");
        $stm->execute(array($lastname,$firstname,$birthdate,$phone,$mail,$id));
        header('location:liste-patients.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-light">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.instagram.com/_amine_dahii/">By Dahi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    </div>
    <div class="container mt-5">
    <form method="POST" >
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lastname" value="<?php echo $lastname?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstname" value="<?php echo $firstname?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Birthdate</label>
            <input type="date" class="form-control" id="exampleInputPassword1"  name="birthdate" value="<?php echo $birthdate?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">phone</label>
            <input type="text" class="form-control" id="exampleInputPassword1"  name="phone" value="<?php echo $phone?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">mail</label>
            <input type="email" class="form-control" id="exampleInputPassword1"  name="mail" value="<?php echo $mail?>">
        </div>
        <div class="d-flex justify-content-end">
       <input type="submit" name="edit" class="btn btn-info " value="Save">
        </div>
</form>
    </div>
</body>
</html>