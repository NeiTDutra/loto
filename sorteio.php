<?php

function novo_sort()
{

	unset($_POST['sortear']);
		
	$quant_sort = $_POST['quant_sort'];
	unset($_POST['quant_sort']);
	
	echo '<div class="sort_container">';
		
	$arr1 = range(1,25);
	
	$s = 0;	
	foreach ( $_POST as $p )
	{
		$p = intval($p);
		$arr[$s] = $p;
		$s += 1;
	}
		
	$arr3 = isset($arr) ? $arr : null;
		
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
		
			echo '<p>Escolha entre 1 e 6 números!!!</p>
				 </div><hr>';
			return false;
			die();
		
		}
		
	}
	
	for ( $p = 0; $p < $quant_sort; $p += 1)
	{
		$pp = $p += 1;
		sorteio($arr1, $pp, $arr3);
		$pp = $p -= 1;
				
	}
		
		echo '</div><hr>';

}

function sorteio($pst, $np, $arr3)
{

	$arr1 = range(1,25);
	$arr2 = range(1,25);
	$troca = array(0, 5, 10, 15, 20);
	
	shuffle($pst);
	
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
			
			if ( $arr2[$i] === $pst[$k] )
			{	
			
				echo '<div class="sort_cell" id="green">'.$pst[$k].'</div>';
				$arr2[$i] = null;
			
			}
	
		for ( $j = 0; $j < count($arr3); $j += 1 )
		{
		
			if ( $arr2[$i] === $arr3[$j] && $arr2[$i] != null && $arr2[$i] != $pst[$k])
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
		unset ($pst);
		unset ($arr2);
		unset ($arr3);
		unset ($troca);
	
}
