<?php

require_once('Database.class.php');

	class Joueur
	{
		private $id;
		private $nom;
		private $login;
		private $password;
		
		
		public function __construct($id,$nom,$login,$password)
		{
			$this->id = $id;
			$this->login = $login;
			$this->nom = $nom;
			$this->password = $password;
		}
		
		public function setId($id)
		{
			$this->id= $id;
		
		}
		
		public function getId()
		{
			return $this->id;
		}
		
		
		public function setnom($nom)
		{
			$this->nom=$nom;
		}
		
		public function getNom()
		{
		
			return $this->nom;
		}
		
		public function setLogin($login)
		{
			$this->login = $login;
		
		}
		
		public function getLogin()
		{
			return $this->login;
			
		
		}
		
		public function setPassword($password)
		{
			$this->password = $password;
		}
		
		public function getPassword()
		{
			return $this->password;
		
		}
		
		public static function getJoueur($login,$password)
		{
		try{
			$rep = Database::getConnection()->prepare('select * from joueur where login=:login and password=:password');
			$rep->execute(array(
			'login'=>$login,
			'password'=>$password
			));
			if($donnes = $rep->fetch())
			{
				$joueur = new Joueur($donnes['id'],$donnes['nom'],$donnes['login'],$donnes['password']);
				return $joueur;
			}
			else
			{	
			return null;
			}
		}catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		
		}
		}
	
	}


?>