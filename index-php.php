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
    <div class="container">
      <img src="img\logo.png" alt="logo">
    </div>
  </header>
  <!-- MAIN -->
  <main>
    <!-- container-box -->
    <div class="container-box">
      <div class="container">
        <!-- box -->
        <?php foreach ($dischi as $disco) {?>
          <div class="box">
            <img src="<?php echo $disco['poster']; ?>" alt="poster" class="pd_b-2">
            <h2 class="pd_b-2"><?php echo $disco['title']; ?></h2>
            <h3 class="pd_b-1"><?php echo $disco['author']; ?></h3>
            <p class="pd_b-1"><?php echo $disco['year']; ?></p>
          </div>
        <?php } ?>
      </div>
    </div>
  </main>

</body>
</html>
