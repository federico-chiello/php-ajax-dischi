<!-- PHP -->
<?php
  include 'database.php';
 ?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Dischi musicali</title>
</head>
<body>
  <!-- HEADER -->
  <header>

  </header>
  <!-- MAIN -->
  <main>
    <?php foreach ($dischi as $disco) {?>
      <img src="<?php echo $disco['poster']; ?>" alt="">
      <h2><?php echo $disco['title']; ?></h2>
      <h3><?php echo $disco['author']; ?></h3>
      <p><?php echo $disco['year']; ?></p>
      <!-- <?php var_dump($disco); ?> -->
    <?php } ?>

  </main>


</body>
</html>
