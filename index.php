<!DOCTYPE html>
<?php
    require_once "db_connect.php";

    $sql = "SELECT * FROM library";
    $result = mysqli_query($connect, $sql);
    $body = "";

    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $body .= "<div class='card' style='width: 22rem; text-align: center;'>
      <div class='card-body'>
      <div>
        <img class='card-img object-fit-cover' style='width: 20rem; height: 12rem;' src='images/{$row['image']}'>
        <h4 class='card-title' style='margin-top:4%'>{$row["title"]}</h4>
        <p class='card-text'>{$row["author_firstName"]}  {$row["author_lastName"]}</p>
        <p class='card-text'>{$row["type"]}</p>
        <a href='details.php?id={$row["id"]}' class='btn btn-primary'>Show details</a>
        <a href='update.php?id={$row["id"]}' class='btn btn-success'>Edit</a>
        <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
        </div>
      </div>
    </div>";
        }
    }else{
        $body .= "<p>No result</p>";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD4 - Big Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .row {
            --bs-gutter-x: 0;
            display: flex;
            justify-content: space-around;
            gap: 10px;
        }

        .navbar .nav-item .nav-link {
            font-size: larger;
            font-weight: bold;
            color: white;
        }
       
        .navbar .navbar-brand {
            font-size: larger;
            font-weight: bold;
            text-transform: uppercase;
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark fixed-top" style="padding-bottom: 20px; background-color: gray;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">The Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create media</a>
        </li>
      </ul>
    </div>
  </div>

  
</nav>
<div class="hero" style="margin-top: 90px">
    <img src="pictures/library.png" alt="" >
  </div>

<div class="row rows-col-lg-3 rows-col-md-2 rows-col-sm-1">
    <?= $body ?>
</div>

<footer class="text-center" style="margin-top: 3%;">
    <div class="text-center text-light p-2 bg-dark">
    <p class="text-light"> © 2023 Copyright: Natasa Cvrlja</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
