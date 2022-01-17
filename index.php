<?php 

require_once __DIR__ . "/Movie.php";
require_once __DIR__ . "/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php foreach($movies as $movie) :
  $new_movie = new Movie($movie["title"], $movie["duration"]) ?>

    <div>
      <h1><?php echo $new_movie->title ?></h1>
      <h5><?php echo $new_movie->duration ?></h5>
    </div>

  <?php endforeach; ?>
</body>
</html>