<?php
require_once '../inc/functions.php';

/*
 * Exo 6 : Mamie reçoit les p’tits enfants
 *
 * Bon, tant qu'on y est, ça serait bien aussi de calculer leur âge.
 * J'ai toujours eu la bonne mémoire des dates, je connais leur
 * date de naissance par coeur.
 *
 * Seulement, pour calculer leur âge à partir de leur date de naissance,
 * saperlipopette !
 *
 * Si je te rajoute un paramètre `birth` à l'URL, tu crois que tu pourrais
 * aussi me rajouter l'âge ? Je te passe la date sous la forme DD-MM-YYYY.
 * Par exemple :
 *   `exo5.php?name=Zelda&birth=18-05-2003`
 *
 * Ensuite, il te "suffirait" qu'à récupérer, découper, puis comparer…
 *   http://php.net/manual/fr/function.explode.php
 *   http://php.net/manual/fr/function.date.php
 *
 *
 * Allez, bon courage… (mouhahaha)
 */

function hello() {

    //récupération de la date de naissance dans une variable
    $dob = $_GET["birth"];
    // echo $dob;
    //récupération de la date du jour
    $today = date("d-m-Y");
    // echo $today;

    // découpage en segments avec explode de $dob et mise dans une variable
    $dobArray = explode ("-", $_GET["birth"]);
    // echo $dobArray[0];
    // echo $dobArray[1];
    // echo $dobArray[2];

    //découpage en segments avec explode de $today et mise dans une variable
    $todayArray = explode ("-", date("d-m-Y"));
    // echo $todayArray[0];
    // echo $todayArray[1];
    // echo $todayArray[2];

    //comparaison des dates pour en déduire l'age
    function getAge($todayArray , $dobArray) {
        $age = $todayArray[2] - $dobArray[2];
            if (($todayArray[1] < $dobArray[1]) || ($todayArray[1] < $dobArray[1]) && ($todayArray[0] < $dobArray[0]))
            $age = $age - 1 ;
        return $age;
    };

    $age = getAge($todayArray, $dobArray);
    // echo $age;



//et c'est parti

return 'Bonjour ' . htmlspecialchars($_GET["name"]).', comment tu vas ? Tu as ' . $age . ' ans maintenant !';

}




/*
 * Tests
 * Pas touche !
 */
displayExo(6, (
    hello() === 'Bonjour Elisa, comment tu vas ? Tu as 16 ans maintenant !'
));
