
	<?php
	require_once('Metier/Grille.class.php');
	$matrice=array();
		$grille = new Grille(9);
		echo '<table border="1">';
			for($i=0;$i<count($grille->getCases());$i++)
			{	
				echo '<tr>';
				for($j=0;$j<count($grille->getCases()[$i]);$j++)
				{	
					echo '<td>';
					echo '<table>';
						for($k=0;$k<count($grille->getCases()[$i][$j]->getMatrice());$k++)
						{
						echo '<tr>';
							for($l=0;$l<count($grille->getCases()[$i][$j]->getMatrice()[$k]);$l++)
							{	
							echo '<td style="width:24px;text-align:center;">';
							?>
							
								<?php
								echo $_POST[$i.'_'.$j.'_'.$k.'_'.$l]; 
								$matrice[$i][$j]=$_POST[$i.'_'.$j.'_'.$k.'_'.$l];
								?>
							<?php
							echo '</td>';
							}
						echo '</tr>';
					}
					echo '</table>';
					echo '</td>';
					
				}
				echo '</tr>';
			}
		echo '</table>';
		//echo $grille->getCases()[$i][$j]->getMatrice()[$k][$l];
		
		echo 'Verification des lignes :<br/>';
		for($a=0;$a<3;$a++)
		{
			for($i=0;$i<3;$i++)
			{
				echo 'verifier doublons sur : ';
				$tab=array();
				$b = 'sans doublons';
				for($j=0;$j<3;$j++)
				{
					for($k=$a;$k<$a+1;$k++)
					{
						for($l=0;$l<3;$l++)
						{
							echo $_POST[$i.'_'.$j.'_'.$k.'_'.$l].' ';
							
							if($_POST[$i.'_'.$j.'_'.$k.'_'.$l]!=0)
							{
								if(in_array($_POST[$i.'_'.$j.'_'.$k.'_'.$l],$tab))
									$b ='avec doublons';
								else
									$tab[] =$_POST[$i.'_'.$j.'_'.$k.'_'.$l];
							}
							
						}
					}
				}
				echo '-'.$b.' en ignorant les 0<br/>';
			}
		}

		
		echo 'Verification des colonnes :<br/>';
		for($a=0;$a<3;$a++)
		{
			for($i=0;$i<3;$i++)
			{
				echo 'verifier doublons sur : ';
				$tab=array();
				$b = 'sans doublons';
				for($j=0;$j<3;$j++)
				{
					for($k=$a;$k<$a+1;$k++)
					{
						for($l=0;$l<3;$l++)
						{
							echo $_POST[$j.'_'.$i.'_'.$l.'_'.$k].' ';
								
							
							if($_POST[$j.'_'.$i.'_'.$l.'_'.$k]!=0)
							{
								
								if(in_array($_POST[$j.'_'.$i.'_'.$l.'_'.$k],$tab))
									$b ='avec doublons';
								else
									$tab[] =$_POST[$j.'_'.$i.'_'.$l.'_'.$k];
							}
							
						}
					}
				}
				echo '-'.$b.' en ignorant les 0<br/>';
			}
		}
	
	?>