const nombre1 = parseFloat(prompt("Entrez le premier nombre :"));
const nombre2 = parseFloat(prompt("Entrez le deuxième nombre :"));

const somme = nombre1 + nombre2;
const difference = nombre1 - nombre2;
const produit = nombre1 * nombre2;
const quotient = nombre2 !== 0 ? nombre1 / nombre2 : "Division par zéro impossible";

console.log("Somme :", somme);
console.log("Différence :", difference);
console.log("Produit :", produit);
console.log("Quotient :", quotient);
