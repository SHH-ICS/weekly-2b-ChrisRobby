<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Results Page</title>
  </head>

  <body>
    
    <?php 
    function calcArea(float $r):float {
      return 3.14159 * $r * $r;
    }

    function calcCircumference(float $r):float {
      return 3.14159 * 2.0 * $r;
    }

    $userName = "";
    if ( isset( $_POST['diameter'] ) ){
      $diameter = $_POST['diameter'];
      $radius = $diameter / 2.0;
    }
    echo "<h1>For a Circle of Diameter ".$diameter."</h1>\n";
    echo "<p>Radius = ".$radius."\n";
    echo "<p>Area = ". calcArea($radius) ."\n";
    echo "<p>Circumference = ". calcCircumference($radius) ."\n";
    ?>

    <p>
      <img src=./images/circles.png alt="Circles">
    </p>

  </body>
  
</html>
