<?php
require_once('Metier/Grille.class.php');
include_once("../Sudoku/header.php");
?>
<div class="span6">
		<form class="form" action="?page=verifier" method="post">
<?php
		if(isset($_POST['choix']))
		{
		 $taille = $_POST['choix'];
		 $grille = new Grille($taille);
		 echo '<table border="1">';
			for($i=0;$i<count($grille->getCases());$i++)
			{	
				echo '<tr>';
				for($j=0;$j<count($grille->getCases()[$i]);$j++)
				{	
					echo '<td width="20px">';
					echo '<table>';
						for($k=0;$k<count($grille->getCases()[$i][$j]->getMatrice());$k++)
						{
						echo '<tr>';
							for($l=0;$l<count($grille->getCases()[$i][$j]->getMatrice()[$k]);$l++)
							{	
							echo '<td>';
							if($grille->getCases()[$i][$j]->getMatrice()[$k][$l]==0)
							{
							?>
								<input type="text" size="1" name="<?php echo $i.'_'.$j.'_'.$k.'_'.$l;?>" value="<?php echo $grille->getCases()[$i][$j]->getMatrice()[$k][$l]; ?>" />
							<?php
							}
							else
							{
							?>
									<input type="hidden" size="1" name="<?php echo $i.'_'.$j.'_'.$k.'_'.$l;?>" value="<?php echo $grille->getCases()[$i][$j]->getMatrice()[$k][$l]; ?>"  />
									<input type="text" size="1"value="<?php echo $grille->getCases()[$i][$j]->getMatrice()[$k][$l]; ?>" disabled="disabled" />
									
							<?php
							}
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
		?>
			<br/>
			
				<button class="btn btn-danger" type="submit" value="Valider">Valider</button>
			</form>
		<?php
		}
		else
		{
		
		echo 'Access denied';
		}?>
</div>