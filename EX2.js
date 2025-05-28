const nombreSecret = Math.floor(Math.random() * 10) + 1;
let tentative = 0;
let devine = false;

while (!devine) {
  const proposition = parseInt(prompt("Devinez un nombre entre 1 et 10 :"));
  tentative++;

  if (proposition === nombreSecret) {
    alert(`Bravo ! Vous avez trouvé en ${tentative} tentative(s).`);
    devine = true;
  } else if (proposition < nombreSecret) {
    alert("Trop petit !");
  } else {
    alert("Trop grand !");
  }
}
