<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Strong Password Generator</title>
</head>
<body>
<?php include 'functions.php';?>
  <form action="index.php" method="get">
    <label for="lunghezza">Lunghezza password:</label>
    <input type="text" id="lunghezza" name="lunghezza" value="<?php echo $lunghezza ?? '' ?>">
    <button type="submit">Genera password</button>
  </form>
  <?php if ($password): ?>
    <p>La tua password è: <?php echo $password ?></p>
  <?php endif; ?>


    
</body>
</html>