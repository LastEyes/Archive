<?php
function generateRandomString($length) {
    $characters = 'a##$bc$#(def#$g)(h$%ij%kl%m#n%o(pqr^s#t#u)vw)&xyzFIF%%IFIFI%%FIFI%%IIF%%%IFIF%I%LIL%%ILILI%LI%LILI%L%ITT%TTTE%%EEEEE%EER%RE%%%RE%RE%RE%RE%Rhttp://dxprit-dayson-payambarhttp://7.0.6.4/f.h.rubik.ir/d.5.2.7.9.0.9.1.3.5.0.3.1.7.8.9.2.6.Stp=ipmort.Location.filter//Ipban:127.346.23.74.2-noob-hack-infect.phpnet.us/dxprit.html.Filter_acunt.(23/23)https://github.com/Yftt85k/filteri.rubika.hackers656.infect.in.set_filter';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$randomString = generateRandomString(27);
$randomTexts = [
    "http://messengerg2c17",
    "http.iranlms",
    "supportbot.",
    "https://tex.sexi",
    "9.f.f.g.h..",
    "infect.",
    "set_filter.",
    "in.",
    "tex.sex27/",
    "tex.sexi.7.5/",
    "tex7588/",
    "sexi.7588/",
    "fil.tr90",
    "filter.rub",
    "ir.filter",
    "rub.rg2c17",
];

function getRandomText($texts)
{
    return $texts[array_rand($texts)];
}

$randomText = getRandomText($randomTexts);
echo "$randomText/$randomString";
?>
