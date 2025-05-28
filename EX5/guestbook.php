<!DOCTYPE html>
<html>
<head><title>Livre d'or</title></head>
<body>
  <h2>Laissez un message</h2>
  <form method="post">
    Nom : <input type="text" name="nom" required><br>
    Message : <textarea name="message" required></textarea><br>
    <button type="submit">Envoyer</button>
  </form>

  <?php
  $file = "messages.txt";

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $message = htmlspecialchars($_POST["message"]);
    $date = date("Y-m-d H:i:s");

    $entry = "$date - $nom : $message\n";
    file_put_contents($file, $entry, FILE_APPEND);
  }

  echo "<h3>Messages :</h3><pre>";
  if (file_exists($file)) {
    echo file_get_contents($file);
  }
  echo "</pre>";
  ?>
</body>
</html>
