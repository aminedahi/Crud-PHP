<?php
    include 'connection.php';
    // $message = '';
    if(isset($_POST['save'])){
        if(empty($_POST['lastname'] ) || empty($_POST['firstname']) || empty($_POST['birthdate']) || empty($_POST['phone']) || empty($_POST['mail'])){
            echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
            echo " <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'>
                            <use xlink:href='#exclamation-triangle-fill'/>
                        </svg>";
            echo "<div>
                        saisir de champs obligatoire
                    </div>";
            echo   "</div>";
        }else{
            $lastname=$_POST['lastname'];
            $firstname=$_POST['firstname'];
            $birthdate=$_POST['birthdate'];
            $phone=$_POST['phone'];
            $mail=$_POST['mail'];
            $sql='INSERT INTO patients(id,lastname,firstname,birthdate,phone,mail) VALUES(NUll,?,?,?,?,?)';
            $stm = $conn->prepare($sql);
            if($stm->execute([$lastname,$firstname,$birthdate,$phone,$mail])){
                $message  ="Data inserted Successfully";
            }
        }
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
        <?php 
            if(!empty($message))
            echo 
                    "<div class='alert alert-success d-flex align-items-center' role='alert'>
                    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'>
                        <use xlink:href='#exclamation-triangle-fill'/>
                    </svg>
                    <div>
                            $message
                    </div>
                </div>";
        ?>
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
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lastname">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstname">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Birthdate</label>
            <input type="date" class="form-control" id="exampleInputPassword1"  name="birthdate">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">phone</label>
            <input type="text" class="form-control" id="exampleInputPassword1"  name="phone">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">mail</label>
            <input type="email" class="form-control" id="exampleInputPassword1"  name="mail">
        </div>
        <row>
            <div class="d-flex justify-content-between">
                <input type="submit" name="save" class="btn btn-info " value="ADD">
                <a type="submit" href="liste-patients.php" name="back" class="btn btn-info " value="Back to List">Back to List</a>
            </div>
        </row>
</form>
    </div>
</body>
</html>