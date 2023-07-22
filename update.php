<?php
    require_once "db_connect.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM library WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);


    if(isset($_POST["update"])){
        $title = $_POST['title'];
        $image = $_POST['image'];
        $isbn = $_POST['isbn'];
        $type = $_POST['type'];
        $short_description = $_POST['short_description'];
        $author_firstName = $_POST['author_firstName'];
        $author_lastName = $_POST['author_lastName'];
        $publisher_name = $_POST['publisher_name'];
        $publisher_addres = $_POST['publisher_addres'];
        $publisher_date = $_POST['publisher_date'];
        $availability = $_POST['availability'];
       

        $sql = "UPDATE `library` SET `title` = '$title', `image` = '$image', `isbn` = $isbn, `type` = '$type', `short_description` = '$short_description', `author_firstName` = '$author_firstName', `author_lastName` = '$author_lastName', `publisher_name` = '$publisher_name', `publisher_addres` = '$publisher_addres', `publisher_date` = '$publisher_date', `availability` = '$availability' WHERE id = $id";

        if (mysqli_query($connect, $sql)){
        echo "<div class='alert alert-success' role='alert'>
                New record has been created
                </div>" ;
         header("refresh: 3; url= index.php");
        }else  {
        echo "<div class='alert alert-danger' role='alert'>
                error found
                </div>" ;
        }
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


<form method="post" style="margin-top: 90px;">
    <label class="form-label" for="title">Title: </label>
    <input value="<?= $row["title"] ?>" class="form-control" aria-describedby="title" type="text" name="title" id="title">
    <br>
    <label class="form-label" for="isbn">ISBN: </label>
    <input value="<?= $row["isbn"] ?>" class="form-control" aria-describedby="isbn" type="text" name="isbn" id="isbn">
    <br>
    <label class="form-label" for="authorfname">Author first name: </label>
    <input value="<?= $row["author_firstName"] ?>" class="form-control" aria-describedby="author_firstName" type="text" name="author_firstName" id="authorfname">
    <br>
    <label class="form-label" for="authorlname">Author last name: </label>
    <input value="<?= $row["author_lastName"] ?>" class="form-control" aria-describedby="author_lastName" type="text" name="author_lastName" id="authorlname">
    <br>
    <label class="form-label" for="publisher_name">Publisher name: </label>
    <input value="<?= $row["publisher_name"] ?>" class="form-control" aria-describedby="publisher_name" type="text" name="publisher_name" id="publisher_name">
    <br>
    <label class="form-label" for="publisher_addres">Publisher address: </label>
    <input value="<?= $row["publisher_addres"] ?>" class="form-control" aria-describedby="publisher_addres" type="text" name="publisher_addres" id="publisher_addres">
    <br>
    <label class="form-label" for="publisher_date">Publishing year: </label>
    <input value="<?= $row["publisher_date"] ?>" class="form-control" aria-describedby="publisher_date" type="text" name="publisher_date" id="publisher_date">
    <br>
    <label class="form-label" for="type">Type: </label>
    <input value="<?= $row["type"] ?>" class="form-control" aria-describedby="type" type="text" name="type" id="type">
    <br>
    <label class="form-label" for="short_description">Short description: </label>
    <input value="<?= $row["short_description"] ?>" class="form-control" aria-describedby="short_description" type="text" name="short_description" id="short_description">
    <br>
    <label class="form-label" for="image">Image: </label>
    <input value="<?= $row["image"] ?>" class="form-control" aria-describedby="image" type="text" name="image" id="image">
    <br>
    <label class="form-label" for="availability">Availability: </label>
    <input value="<?= $row["availability"] ?>" class="form-control" aria-describedby="availability" type="text" name="availability" id="availability">
    <br>
    <button type="submit" name="update" class="btn btn-primary">Submit</button>
</form>


<footer class="text-center" style="margin-top: 3%;">
    <div class="text-center text-light p-2 bg-dark">
    <p class="text-light"> © 2023 Copyright: Natasa Cvrlja</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>