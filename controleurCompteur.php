<?php
$monfichier=fopen('compteur.txt','r+');
$pagesvues = fgets($monfichier);
if(!array_key_exists('visited', $_SESSION) && $_SESSION['visited']!== true)
$pagesvues++;
$_SESSION['visited']="true";
fseek($monfichier,0);
fputs($monfichier,$pagesvues);

fclose($monfichier);