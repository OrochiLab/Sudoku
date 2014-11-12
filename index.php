<?php
session_start();

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php

if(!isset($_GET['page']))
	$_GET['page'] = 'accueil';

	
if(isset($_SESSION['nom']) and $_GET['page']!='deconnexion')
	echo '<h4>Joueur : '.$_SESSION['nom'].'</h4>';
	
	if($_GET['page']!='accueil')
		echo '<a href="?page=accueil">Retour à la page d\'accueil</a>';
	

	switch($_GET['page'])
	{
		case 'accueil':
		include_once('includes/login.php');
		break;	
		
		case 'panel':
		include_once('includes/panel.php');
		break;
		
		case 'deconnexion':
		session_destroy();
		$_SESSION=array();	
		include_once('includes/login.php');
		break;
	
		case 'jeu':
		include_once('includes/jeu.php');
		break;
		
		case 'verifier':
		include_once('includes/verifier.php');
		break;
		
		
		default;
		include_once('includes/login.php');
		break;
	
	}
	
	
	?>
</body>
</html>