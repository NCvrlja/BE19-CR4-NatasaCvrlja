<?php

    require_once 'db_connect.php';

    $publisher = $_GET["publisher_name"];
    // ? $GET["publisher_name"] : "";
    $sql = "SELECT * FROM library WHERE publisher_name = '$publisher'"; 
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    
    $body="";

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            
            $body .= "
       
            <h4 class='card-title' style='margin-top:4%'>{$row["title"]}</h4>
            <p class='card-text'>{$row["author_firstName"]}  {$row["author_lastName"]}</p>
            <p class='card-text'>{$row["short_description"]}</p>
            <p class='card-text'>ISBN: {$row["isbn"]}</p>
          ";  
        }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Details</title>
</head>
<body>
    <div class="container">   >
        <div class="row text-center">
          <div class="col-12 row justify-content-center">
           <h1 class="text-center"><?php echo $publisher; ?></h1>

              <?php
                echo $body; 
              ?>
                 <a class='btn btn-primary' href='index.php'>Home page</a>
      </div>
    </div>
  </div>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
