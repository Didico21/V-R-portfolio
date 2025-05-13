Script.js

// scripts.js
console.log("Le fichier JavaScript est bien lié !");

let monNombre = 42; // variable contenant un entier
let monTexte = "Bonjour"; // variable contenant une chaîne de caractères

console.log(monNombre); // Affiche : 42
console.log(monTexte);  // Affiche : Bonjour

function maFonction(nombre, texte) {
    return "Le nombre est " + nombre + " et le texte est : " + texte;
}

console.log(maFonction(41, "hello")); // Affiche : Le nombre est 41 et le texte est : hello

function carre(nombre) {
    return nombre * nombre;
}

console.log(carre(5)); // Affiche : 25

function direBonjour(prenom, nom) {
    return "Bonjour " + prenom + " " + nom + " !";
}

console.log(direBonjour("Jean", "Dupont")); // Affiche : Bonjour Jean Dupont !

function produitPositif(a, b) {
    return Math.abs(a * b);
}

console.log(produitPositif(-4, 5));  // Affiche : 20
console.log(produitPositif(-3, -2)); // Affiche : 6

function multiplierSansAsterisque(a, b) {
    let resultat = 0;
    const positif = Math.abs(b);
    
    for (let i = 0; i < positif; i++) {
        resultat += a;
    }

    // Gérer les signes : si un seul est négatif, le résultat est négatif
    if ((a < 0 && b > 0) || (a > 0 && b < 0)) {
        resultat = -resultat;
    }

    return resultat;
}

console.log(multiplierSansAsterisque(3, 4));   // Affiche : 12
console.log(multiplierSansAsterisque(-3, 4));  // Affiche : -12
console.log(multiplierSansAsterisque(-3, -4)); // Affiche : 12

function saluerDepartement(departement) {
    const departementsIUT = ["Informatique", "Génie Civil", "Carrières Sociales", "GEA", "MMI"]; // tu peux adapter la liste

    if (departementsIUT.includes(departement)) {
        return "Bonjour " + departement;
    } else {
        return "Bonjour mais ce département n'est pas proposé à l'IUT de Guadeloupe";
    }
}

console.log(saluerDepartement("Informatique")); // ✅ Bonjour Informatique
console.log(saluerDepartement("Droit"));         // ❌ Bonjour mais ce département n'est pas proposé...

function verifierTrancheAge(age) {
    if (typeof age !== "number" || age < 0) {
        return "Vous êtes une personne agée";
    }

    if (age < 1) {
        return "Vous êtes un nourrisson";
    } else if (age >= 2 && age <= 12) {
        return "Vous êtes un enfant";
    } else if (age >= 13 && age <= 17) {
        return "Vous êtes un adolescent";
    } else if (age >= 18 && age <= 60) {
        return "Vous êtes un adulte";
    } else {
        return "Vous êtes une personne agée";
    }
}

// 🔍 Tests
console.log(verifierTrancheAge(0));   // Nourrisson
console.log(verifierTrancheAge(5));   // Enfant
console.log(verifierTrancheAge(15));  // Adolescent
console.log(verifierTrancheAge(30));  // Adulte
console.log(verifierTrancheAge(70));  // Personne âgée
console.log(verifierTrancheAge(-5));  // Personne âgée (valeur incorrecte)
console.log(verifierTrancheAge("abc")); // Personne âgée (valeur incorrecte)
