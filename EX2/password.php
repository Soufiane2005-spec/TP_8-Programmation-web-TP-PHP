<!DOCTYPE html>
<html>
<head><title>Générateur de mot de passe</title></head>
<body>
  <form method="post">
    <label>Longueur du mot de passe :</label>
    <input type="number" name="length" min="4" required>
    <button type="submit">Générer</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $length = intval($_POST["length"]);
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
      $password .= $chars[rand(0, strlen($chars) - 1)];
    }

    echo "<p><strong>Mot de passe généré :</strong> $password</p>";
  }
  ?>
</body>
</html>
