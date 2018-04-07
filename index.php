<html>
  <head>
    <link rel="stylesheet" href="assets/styles/style.css">
    <script src="assets/scripts/lib/jquery-3.2.1.min.js"></script>
    <script src="assets/scripts/scripts.js"></script>
  </head>

  <body>
    <div class="boot-up crt">
      <div class="text">
        <div class="decoration">
          <div class="a"></div>
          <div class="b"></div>
          <div class="c"></div>
        </div>
        <h1>Nostromo</h1>
        <registry>189024609</registry>
      </div>

      <div class="loading">
        <p>Booting System</p>
        <div class="progress">
          <?php for($i = 0; $i < 50; $i++): ?>
            <div class="bar" id="progress-bar-<?php echo $i; ?>"></div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </body>
</html>
