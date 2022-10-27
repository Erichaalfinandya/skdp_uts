<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body">
  <!-- navbar -->
  <?php require "components/navbar.php"?>
  <!-- /navbar -->

  <!-- content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8 mt-5 pt-5">
        <div class="card text-center">
          <h5 class="card-header bg-dark" style="color:white;">List Student</h5>
          <div class="card-body">
            <h1>Coming soon...</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
</body>
</html>