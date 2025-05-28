const QUESTIONS = [
  ["Quelle est la capitale de la France ?", "Paris"],
  ["Combien y a-t-il de continents ?", "7"],
  ["Quelle est la couleur du ciel par temps clair ?", "Bleu"],
  ["Quel est le résultat de 3 + 4 ?", "7"],
  ["Quelle est la première lettre de l'alphabet ?", "A"]
];

function lancerQuiz() {
  let bonnesReponses = 0;

  for (let i = 0; i < QUESTIONS.length; i++) {
    const question = QUESTIONS[i][0];
    const reponseCorrecte = QUESTIONS[i][1];
    const reponseUtilisateur = prompt(question);

    if (reponseUtilisateur !== null && reponseUtilisateur.trim().toLowerCase() === reponseCorrecte.toLowerCase()) {
      alert("Réponse juste !");
      bonnesReponses++;
    } else {
      alert("Réponse fausse !");
    }
  }

  alert(`Vous avez répondu correctement à ${bonnesReponses} question(s) sur ${QUESTIONS.length}.`);
}
