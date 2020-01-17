<?php

for ( $p = 0; $p < 10; $p += 1)
{

	$pp = $p += 1;
	echo 'Aposta - '.$pp.'<hr>';
	$pp = $p -= 1;
	sorteio($_POST);

}

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
	
	echo '<div class="sort"><table>';
	
	
	for ( $i = 0; $i < count($arr2); $i += 1 )
	{
	
		foreach ( $troca as $t )
		{
		
			if ( $t === $i )
			{
			
				echo '<tr><td style="width:30%;">';
			
			}
		
		}
			
		for ( $k = 0; $k < 15; $k += 1 )
		{
			
			if ( $arr2[$i] === $arr1[$k] && $arr1[$k] != $arr3[$j])
			{	
			
				echo '<div style="border:1px solid black; position:relative; display:flex; justify-content:center; float:left; width:10%; margin:2%; color:#008B8B; background: #C1FFC1;">'.$arr2[$i].'</div>';
				$arr2[$i] = null;
			
			}
	
		for ( $j = 0; $j < count($arr3); $j += 1 )
		{
		
			if ( $arr2[$i] === $arr3[$j] && $arr2[$i] != null && $arr2[$i] != $arr1[$k])
			{
			
				echo '<div style="border:1px solid black; position:relative;  display:flex; justify-content:center;float:left; width:10%; margin:2%; color:red; background: #FFE4B5;">'.$arr3[$j].'</div>';
				$arr2[$i] = null;
			
			}
			
		}
			
		}
		
		if ( $arr2[$i] != null )
		{
			
			echo '<div style="border:1px solid black; position:relative;  display:flex; justify-content:center;float:left; width:10%; margin:2%; color:black;">'.$arr2[$i].'</div>';
		
		}
		
	}

		echo '</table></div>';
	
}
