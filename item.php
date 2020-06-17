<?php include("produtos/servicos.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <title>Welcome - Home Page</title>
</head>
<body>
  <?php include("includes/header.php"); ?>
  <?php include("includes/login.php"); ?>
  <main>
    <?php echo $_GET["id"]; ?>
  </main>
 <?php include("includes/footer.php"); ?>
</body>
</html>
