<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$strona = 'http://www.filmweb.pl/user/promil77/blog/542138-Gatunki+filmowe,+czyli+z+czym+nale%C5%BCy+kojarzy%C4%87+dany+film+)';
$strona = 'https://pl.wikipedia.org/wiki/Kategoria:Gatunki_filmowe';
$rC = curl_init();
curl_setopt($rC, CURLOPT_HEADER, 1);
curl_setopt($rC, CURLOPT_COOKIEFILE, 'cookies.txt');
curl_setopt($rC, CURLOPT_COOKIEJAR, 'cookiesjar.txt');
curl_setopt($rC, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($rC, CURLOPT_VERBOSE, 0);
curl_setopt($rC, CURLOPT_USERAGENT, $useragent);
curl_setopt($rC, CURLOPT_REFERER, 'www.google.pl');
curl_setopt($rC, CURLOPT_URL, $strona);

$wejscie = curl_exec($rC);
curl_setopt($rC, CURLOPT_REFERER, $strona);
$wejscie = curl_exec($rC);
$genres;
preg_match('/<div lang="pl" dir="ltr" class="mw-content-ltr">(.+?)<\/div>/ism', $wejscie, $genres);

//print_r($genres);
print_r($genres);
/*$genres;
preg_match('/<div class="entryContent">(.+?)<\/div>/ism', $wejscie, $genres);
$genres = explode('<hr>',$genres[0]);
$lenght = sizeof($genres);
$array = array();
for($i = 1; $i<$lenght; $i++)
{
    $array[$i] = explode('-', $genres[$i]);
}
//echo $genre;
print_r($array);*/
?>