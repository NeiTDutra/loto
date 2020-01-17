<?php

for ( $p = 0; $p < 10; $p += 1)
{

	$pp = $p += 1;
	echo 'Aposta - '.$pp;
	$pp = $p -= 1;
	sorteio($_POST);

}

unset ($_POST);

function sorteio($pst)
{

	unset($_POST['sortear']);
		
		$i = 0;	
		foreach ( $_POST as $p )
		{
			$p = intval($p);
			$arr[$i] = $p;
			$i += 1;
		}
	$arr3 = $arr;
	$arr1 = range(1,25);
	$arr2 = range(1,25);
	$troca = array(0, 5, 10, 15, 20);
	for ( $k = 0; $k < count($arr1); $k += 1 )
	{
	
		foreach ($arr3 as $b)
		{
		
			if ( $arr1[$k] === intval($b) )
			{
			
				unset ($arr1[$k]);
			
			}
			
		}
	
	}
	
	shuffle($arr1);
	
	echo '<hr><div class="sort"><table>';
	
	
	for ( $i = 0; $i < count($arr2); $i += 1 )
	{
	
		foreach ( $troca as $t )
		{
		
			if ( $t === $i )
			{
			
				echo '<tr><td>';
			
			}
		
		}
			
		for ( $k = 0; $k < 15; $k += 1 )
		{
			
			if ( $arr2[$i] === $arr1[$k] && $arr1[$k] != $arr3[$j])
			{	
			
				echo '<div class="sort_cell" id="green">'.$arr2[$i].'</div>';
				$arr2[$i] = null;
			
			}
	
		for ( $j = 0; $j < count($arr3); $j += 1 )
		{
		
			if ( $arr2[$i] === $arr3[$j] && $arr2[$i] != null && $arr2[$i] != $arr1[$k])
			{
			
				echo '<div class="sort_cell" id="red">'.$arr3[$j].'</div>';
				$arr2[$i] = null;
				$arr3[$j] = null;
			
			}
			
		}
			
		}
		
		if ( $arr2[$i] != null )
		{
			
			echo '<div class="sort_cell" id="black">'.$arr2[$i].'</div>';
		
		}
		
	}

		echo '</table></div>';
		
		unset ($arr1);
		unset ($arr2);
		unset ($arr3);
		unset ($troca);
	
}
