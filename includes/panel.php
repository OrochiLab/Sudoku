
<?php
include_once('../Sudoku/header.php');
require_once('Metier/Joueur.class.php');

	if(isset($_POST['login']) and isset($_POST['pass']))
	{
		$joueur = Joueur::getJoueur($_POST['login'],$_POST['pass']);
		$_SESSION['nom']=$joueur->getNom();
	}
	if(isset($joueur) or isset($_SESSION['nom']))
	{
			
?>
			
<?php
	}
	else
	{
		echo '<h1>Accès refusé</h1>';
	}


?>
