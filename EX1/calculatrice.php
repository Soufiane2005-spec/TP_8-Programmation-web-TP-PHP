<!DOCTYPE html>
<html>
<head><title>Calculatrice</title></head>
<body>
  <form method="post">
    <input type="number" name="a" required>
    <select name="op">
      <option value="+">Addition</option>
      <option value="-">Soustraction</option>
      <option value="*">Multiplication</option>
      <option value="/">Division</option>
    </select>
    <input type="number" name="b" required>
    <button type="submit">Calculer</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $op = $_POST["op"];

    switch ($op) {
      case "+": $result = $a + $b; break;
      case "-": $result = $a - $b; break;
      case "*": $result = $a * $b; break;
      case "/": 
        if ($b != 0) $result = $a / $b; 
        else $result = "Division par zéro impossible"; 
        break;
      default: $result = "Opération inconnue";
    }

    echo "<h3>Résultat : $result</h3>";
  }
  ?>
</body>
</html>
