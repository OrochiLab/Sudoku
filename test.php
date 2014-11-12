<?php

for($a=0;$a<3;$a++)
{
	for($i=0;$i<3;$i++)
	{
		echo 'verifier : ';
		for($j=0;$j<3;$j++)
		{
			for($k=$a;$k<$a+1;$k++)
			{
				for($l=0;$l<3;$l++)
				{
					echo $i.' '.$j.' '.$k.' '.$l.' , ';
					
				}
			}
		}
		echo '<br/>';
	}
}

for($a=0;$a<3;$a++)
{
	for($i=0;$i<3;$i++)
	{
		echo 'verifier : ';
		for($j=0;$j<3;$j++)
		{
			for($k=$a;$k<$a+1;$k++)
			{
				for($l=0;$l<3;$l++)
				{
					echo $j.' '.$i.' '.$l.' '.$k.' , ';
					
				}
			}
		}
		echo '<br/>';
	}
}

?>