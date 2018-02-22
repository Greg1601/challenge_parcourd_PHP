<?php
require_once '../inc/functions.php';

/*
 * Exo 2 : Mamie à la plage II
 *
 * Bon, je ne vous ai pas tout dit. J'ai la mémoire qui flanche.
 * Du coup, je ne me rappelle jamais si ma fonction `calculPlage`
 * (oui, c'est MA fonction, tu m'as juste aidé un peu, ça va...)
 * prend plusieurs paramètres ou prend un seul paramètre sous forme
 * d'array. Non parce que vous verrez, après 50 ans de dev, si vous
 * avez encore les variables en face des trous.
 *
 * Bref.
 *
 * J'aimerais bien que la fonction puisse prendre :
 *  - soit 3 paramètres : prix maillot, prix lunettes, prix crème
 *  - soit 1 paramètre : un array qui a la forme [prix maillot, prix lunettes, prix crème]
 *
 * Peu importe ce que je lui passe, la fonction saura me faire le calcul !
 *
 *
 * Par exemple :
 *      calculPlage(1, 2, 3) doit renvoyer 9
 *      calculPlage([1, 2, 3]) doit renvoyer 9
 *
 *
 * Une dernière chose, je m'étais noté un pense-bête, ça peut peut-être aider.
 * Attend que je le retrouve… Ah, voilà :
 * http://php.net/manual/fr/function.is-array.php
 */

// Correction : il ne fallait pas ajouter un 4e paramètre
// Correction : il fallait rendre les 2e et 3e paramètres optionnels (en leur donnant une valeur par défaut)
function calculPlage($price, $price1, $price2, $price3) {
    // Correction : tout ceci manque de commentaire :/
    $price1; // Correction : pourquoi ces 3 lignes ?
    $price2;
    $price3;
    $price = array("price1", "price2", "price3");

    // Correction : ici, $price est toujours un array car tu modifie sa valeur à l'instruction précédente
    if (is_array($price)) {
        $total = $price[0] + $price[1] +$price[2]*2;
        return $total;
    }
    else {
        $total = $price1 + $price2 + $price3*2;
        return $total;
    }


}











/*
 * Tests
 * Pas touche !
 */
displayExo(2, (
    calculPlage(10, 10, 10) === 40
    && calculPlage(1, 2, 3) === 9
    && calculPlage(27.90, 59.00, 6.50) === 99.90
    && calculPlage([10, 10, 10]) === 40
    && calculPlage([1, 2, 3]) === 9
    && calculPlage([27.90, 59.00, 6.50]) === 99.90
));
