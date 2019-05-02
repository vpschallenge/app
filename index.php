<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <?php
    try {
      $cfg = parse_ini_file('config/database.ini', true);
      $usr = $cfg['db']['username'];
      $pwd = $cfg['db']['password'];
      $pdo = new PDO("mysql:host=localhost", $usr, $pwd);
      $stm = $pdo->query("SELECT VERSION()");
      $stm->fetch();

      include 'views/success.php';
    }
    catch (Exception $e) {
      include 'views/success.php';
    }
  ?>
  <footer><script type="text/javascript" src="assets/script.js"></script></footer>
</html>
