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
