<?php

$d = file_get_contents('data.json');
$d = json_decode($d, true);
array_unshift($d, $_POST);
$d = json_encode($d);



file_put_contents('data.json', $d);


header( 'location:../index.html' );

?>
