<?php

$base_url = (strstr($_SERVER["HTTP_HOST"],"8080")=== false)?"https://julesp.promo-23.codeur.online/wetransfer_like/":"https://julesp.promo-23.codeur.online/wetransfer_like/";
$username ='julesp';
$password ='5Fqo26deoAbOhA==';
$database ='julesp_db_transfert';
$host ='localhost';


try{

$bdd = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8',$username , $password);

}catch (Exception $e){

die('Erreur : ' . $e->getMessage());

}


?>



