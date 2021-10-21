<?php
include __DIR__ . "/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dischi</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
  <!-- /font google -->
</head>

<body>
  <!-- header -->
  <?php include __DIR__ . '/partials/template/header.php' ?>
  <!-- /header -->
  <!-- main -->
  <main>
    <div class="container">
      <?php foreach ($database as $album) : ?>
        <div class="album">
          <div class="album-img">
            <img src="<?php echo $album['poster'] ?>" alt="">
          </div>
          <h3 class="album-title"><?php echo $album['title'] ?></h3>
          <div class="album-author"><?php echo $album['author'] ?></div>
          <div class="album-year"><?php echo $album['year'] ?></div>
        </div>
      <?php endforeach ?>
    </div>
  </main>
  <!-- /main -->
</body>

</html>