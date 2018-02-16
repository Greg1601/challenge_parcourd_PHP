<?php
require_once '../inc/functions.php';

/*
 * Exo 4 : Mamie joue au loto II
 *
 * Super !
 * Maintenant, reste plus qu'à faire une fonction me donnant
 * un tableau avec les 6 nombres :
 *   - les numéros : 5 nombres de 1 à 49
 *   - le numéro complémentaire : 1 nombre de 1 à 10
 *
 *
 * Par exemple :
 *   numerosLoto() peut renvoyer [49, 42, 12, 36, 27, 9]
 *
 *
 *
 * BONUS:
 *   Si tu te sens, tu peux essayer de faire en sorte
 *   qu'il n'y ait pas de nombre identique. Si tu n'y
 *   arrives pas, ne t'embête pas, je relancerais la
 *   fonction pour avoir d'autres numéros…
 */

function numerosLoto() {
    $tableau = array((mt_rand ( 1 , 49 )), (mt_rand ( 1 , 49 )), (mt_rand ( 1 , 49 )), (mt_rand ( 1 , 49 )), (mt_rand ( 1 , 49 )), (mt_rand ( 1 , 10 )) );
    return $tableau;
}




/*
 * Tests
 * Pas touche !
 */
displayExo(4, (
    is_array(numerosLoto())
    && count(numerosLoto()) === 6
    && is_int(numerosLoto()[0])
    && numerosLoto()[1] >= 1
    && numerosLoto()[2] <= 50
    && numerosLoto()[3] >= 1
    && numerosLoto()[4] <= 50
    && numerosLoto()[5] <= 10
));
