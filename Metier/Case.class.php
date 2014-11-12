<?php
	class Cases {

		private $taille;
		public $matrice;
		
		
		public function __construct($taille)
		{
			$this->taille = $taille;
			$this->matrice = array();
			
			for($i=0;$i<$this->taille;$i++)
			{
				for($j=0;$j<$this->taille;$j++)
				{
					$this->matrice[$i][$j]= 0;
				}
			}
		

			
		}

		public function getTaille()
		{
			return $this->taille;
		}
		public function setTaille($newTaille)
		{
			$this->taille = $newTaille;
		}

		public function setMatrice($matrice)
		{
			$this->matrice=$matrice;
		
		}
		
		public function getMatrice()
		{
			return $this->matrice;
		
		}
		
		public function withDoublons($val)
		{
			$tab=array();
			for($i=0;$i<$this->taille;$i++)
			{
				for($j=0;$j<$this->taille;$j++)
				{
					if($this->matrice[$i][$j]==$val)
					{
						return true;	
					}
				}
			}
			
			return false;
		}
		
		public function inserer_element($ligne,$col,$val)
		{
			$this->matrice[$ligne][$col] = $val;
		
		}
	}

?>