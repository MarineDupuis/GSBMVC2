<?php
include("vues/v_sommaireComptable.php");
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'nouveauVisiteur';
}
$action = $_REQUEST['action'];
switch($action){
	case 'nouveauVisiteur':{
		include("vues/v_nouveauVisiteur.php");
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>