<?php

function novo_sort()
{

		unset($_POST['sortear']);
		
		$quant_sort = $_POST['quant_sort'];
		unset($_POST['quant_sort']);
		
		echo '<div class="sort_container">';
		
		for ( $p = 0; $p < $quant_sort; $p += 1)
		{
			$pp = $p += 1;
			sorteio($_POST, $pp);
			$pp = $p -= 1;
				
		}
		
		echo '</div><hr>';

}

function sorteio($pst, $np)
{

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
		
			echo 'Escolha entre 1 e 6 números!!!';
			return false;
			die();
		
		}
		
	}
	
	shuffle($arr1);
	
	echo '<div class="sort"><table><tr class="titulo_td"><td>Aposta'.$np.'</td><tr>';
	
	
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
			
			if ( $arr2[$i] === $arr1[$k] )
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
