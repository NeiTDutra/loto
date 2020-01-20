<?php

function novo_sort()
{

	if ( isset($_SESSION['sortear']) )
	{
	
		unset($_SESSION['sortear']);
		echo '<script>alert("Escolha novos números");</script>';
		header('Location:index.php');
	
	}
	else
	{

		for ( $p = 0; $p < 10; $p += 1)
		{

			$pp = $p += 1;
			echo '<p>Aposta - '.$pp.'</p></br>';
			$pp = $p -= 1;
			sorteio($_POST);
				
		}

	}

}

function sorteio($pst)
{

	session_start();
	$_SESSION['sortear'] = $_POST['sortear'];
	unset($pst['sortear']);
		
		$s = 0;	
		foreach ( $pst as $p )
		{
			$p = intval($p);
			$arr[$s] = $p;
			$s += 1;
		}
		
	$arr3 = isset($arr) ? $arr : null;
	$arr1 = range(1,25);
	$arr2 = range(1,25);
	$troca = array(0, 5, 10, 15, 20);
	
	for ( $k = 0; $k < count($arr1); $k += 1 )
	{
	
		if ( $arr3 != null )
		{
		
			foreach ($arr3 as $b)
			{
			
				if ( $arr1[$k] === $b )
				{
				
					unset ($arr1[$k]);
					sort ($arr1);
				
				}
				
			}
		
		}
		else
		{
		
			return false;
			die();
		
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
			
				echo '<tr><td>';
			
			}
		
		}
			
		for ( $k = 0; $k < 15; $k += 1 )
		{
			
			if ( $arr2[$i] === $arr1[$k] && $arr1[$k] != $arr3[$j])
			{	
			
				echo '<div class="sort_cell" id="green">'.$arr1[$k].'</div>';
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
