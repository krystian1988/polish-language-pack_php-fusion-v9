<?php
$locale['r100'] = "Oceny";
$locale['r101'] = "Brak ocen. Może czas dodać swoją?";
$locale['r102'] = "Usuń ocenę";
$locale['r103'] = "Dodaj ocenę";
$locale['r104'] = "Tylko zarejestrowani użytkownicy mogą oceniać zawartość strony..\n\nProszę [RATING_ACTION] żeby móc zagłosować.";
$locale['r105'] = "Ocenione przez Ciebie na <b>%s</b> dnia %s";
$locale['r106'] = "Oceń dany materiał";
$locale['r107'] = "- nie wybrano oceny -";
$locale['r108'] = "0 głosów";
$locale['r109'] = "głos";
$locale['r110'] = "głosów";
// Rating Options
$locale['r120'] = "Świetne!";
$locale['r121'] = "Bardzo dobre";
$locale['r122'] = "Dobre";
$locale['r123'] = "Średnie";
$locale['r124'] = "Słabe";

/* My own patch, if you don't want it - comment lines below.
 * To moja własna łatka, jeśli nie chcesz z niej korzystać - zakomentuj poniższe linie
 * Tomasz "jantom" Jankowski, Date: 11 04 2011 16:10 */
require_once INCLUDES."output_handling_include.php";
$locale['r110a'] = "głosy";
replace_in_output("2 ".$locale['r110'],"2 ".$locale['r110a']);
replace_in_output("3 ".$locale['r110'],"3 ".$locale['r110a']);
replace_in_output("4 ".$locale['r110'],"4 ".$locale['r110a']);
