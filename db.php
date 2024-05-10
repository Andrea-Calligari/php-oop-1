<?php 
require_once  __DIR__ . '/models/production.php';
require_once  __DIR__ . '/models/genre.php';




$enterTheVoid = new Production('enter the void', 'english', 10, new Genre('Introspezione'));
$requiemForaDream = new Production('requiem for a dream', 'english', 10, new Genre('Introspezione' ));
$theWolfOfWallStreet = new Production('the wolf of wall street', 'english', 9,new Genre('Introspezione'));
$treUominieUnaGamba = new Production('tre uomini e una gamba', 'italiano', 8, new Genre('Introspezione'));

$filmProductions = 
[
    $enterTheVoid ,
    $requiemForaDream,
    $theWolfOfWallStreet,
    $treUominieUnaGamba

];