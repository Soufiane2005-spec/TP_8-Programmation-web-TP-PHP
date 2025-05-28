<?php
$questions = [
  "Quelle est la capitale de la France ?" => "Paris",
  "2 + 2 = ?" => "4",
  "Couleur du ciel par temps clair ?" => "Bleu"
];

$score = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  foreach ($questions as $q => $correct) {
    $rep = $_POST[md5($q)] ?? "";
    $juste = strtolower(trim($rep)) === strtolower($correct);
    if ($juste) $score++;
    echo "<p><strong>$q</strong><br>Votre réponse : $rep — " .
         ($juste ? "<span style='color:green;'>Juste</span>" : "<span style='color:red;'>Faux (Bonne réponse : $correct)</span>") .
         "</p>";
  }
  echo "<h3>Score : $score / " . count($questions) . "</h3>";
} else {
?>
<form method="post">
  <?php foreach ($questions as $q => $r): ?>
    <p><?php echo $q; ?><br>
      <input type="text" name="<?php echo md5($q); ?>" required>
    </p>
  <?php endforeach; ?>
  <button type="submit">Valider</button>
</form>
<?php } ?>
