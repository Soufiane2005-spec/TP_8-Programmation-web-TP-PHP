<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Bienvenue</title></head>
<body>
  <h2>Bienvenue, <?php echo $_SESSION["user"]; ?> !</h2>
  <a href="logout.php">Se déconnecter</a>
</body>
</html>
