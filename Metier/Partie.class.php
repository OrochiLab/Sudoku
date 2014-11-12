<?php
	class Partie
	{
		private $id;
		private $duree;
		private $score;
	
	
		public function __construct($id,$duree,$score)
		{
			$this->id = $id;
			$this->duree = $duree;
			$this->score = $score;
		
		}
		
		public function setId($id)
		{
			$this->id=$id;
		
		}
		public function getId()
		{
			return $this->id;
		}
		
		public function setDuree($duree)
		{
			$this->duree = $duree;
		}
		
		public function getDuree()
		{
			return $this->duree;
		}
		
		public function setScore($score)
		{
			$this->score=$score;
		}	
		public function getScore()
		{
			return $this->score;
		}
	
	}


?>