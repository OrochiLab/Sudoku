<?php
require_once('Case.class.php');


	class Grille {

		private $taille;
		private $cases; // ==> le truc 3x3
		private static $alearatoire=4;
		public function __construct($taille)
		{
			$this->taille = $taille;
			$this->cases = array();
			$this->taille=$this->taille/sqrt($this->taille);
			for($i=0;$i<$this->taille;$i++)
			{	
				for($j=0;$j<$this->taille;$j++)
				{
					$this->cases[$i][$j]= new Cases($this->taille);
				
				}
			}
			
			$this->initialiser();
			
								
		}

		public function getTaille()
		{
			return $this->taille;
		}
		public function setTaille($newTaille)
		{
			$this->taille = $newTaille;
		}

		public function getCases()
		{
			return $this->cases;
		}
		public function setCases($newCases)
		{
			$this->cases = $newCases;
		}

		public function Verif()
		{
			if ($this != null) {
				# code...
			}
		}
		
		public function initialiser()
		{
			$num=0;
			for($i=0;$i<count($this->cases);$i++)
			{	
				for($j=0;$j<count($this->cases[$i]);$j++)
				{	 
						$tab;
						$num=0;
						$inserer=1;
						while($num<4)
						{	
							$chiffre = rand(1,$this->taille*$this->taille);
							$ligne =rand(0,$this->taille-1);
							$col =rand(0,$this->taille-1);
							$inserer=1;
							if($this->cases[$i][$j]->getMatrice()[$ligne][$col]=='0')
							{

								if($this->cases[$i][$j]->withDoublons($chiffre))
								{
									continue;
								}
								
								 if($this->verifier_ligne($i,$ligne,$chiffre))
								{
									continue;
								}
								
								if($this->verifier_colonne($j,$col,$chiffre))
								{
									continue;
								}
								
								
								$this->cases[$i][$j]->inserer_element($ligne,$col,$chiffre);
								$num = $num +1;
								
							}
							else continue;
							
						}
						
						
						
				}
			}
		}
		
		
		public function verifier_ligne($i,$k,$val)
		{
			$tab=array();
			for($j=0;$j<$this->taille;$j++)
			{
				for($l=0;$l<$this->taille;$l++)
				{
					$cellule = $this->cases[$i][$j]->getMatrice()[$k][$l];
					if($cellule==$val)
					{
						return true;
	
					}
				}
			}
			
			return false;
		}
		
		public function verifier_colonne($j,$l,$val)
		{
			$tab=array();
			for($i=0;$i<$this->taille;$i++)
			{
				for($k=0;$k<$this->taille;$k++)
				{
					$cellule = $this->cases[$i][$j]->getMatrice()[$k][$l];
					if($cellule==$val)
					{
						
						return true;
	
					}
				}
			}
			
			return false;
		}
	}

?>