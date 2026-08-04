
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP page</title>
</head>
<body>

    <?php
    
    require "header.php";

    $name = "John";
    ?>
    <main>
          <h1>Welcome <?php echo"$name"; ?></h1>
              <?php 
                 echo "this text comes from PHP.";
                ?>
    </main>
    
    <?php
    include "footer.php"; 
    ?>


</body>
</html>
