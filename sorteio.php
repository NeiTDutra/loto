<?php

function novo_sort()
{

	unset($_POST['sortear']);
		
	$quant_sort = $_POST['quant_sort'];
	unset($_POST['quant_sort']);
		
	$arr1 = range(1,25);
	
	$s = 0;	
	foreach ( $_POST as $p )
	{
		$p = intval($p);
		$arr[$s] = $p;
		$s += 1;
	}
		
	$arr3 = isset($arr) ? $arr : null;
	
	
	if ( $arr3 != null )
	{	
	
		for ( $k = 0; $k < count($arr1); $k += 1 )
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
		
		echo '<div class="container text-center"><h2 class="indent">Os números sorteados foram:</h2>
			 <p class="indent">(Os números em azul são o sorteio, e em vermelho os isolados)</p>
			 <hr></div>';
		echo '<div id="anch" class="container-fluid align-items-center justify-content-center d-flex flex-wrap indent">';
		
	}
	else
	{
		
		echo '<div class="container text-center">';
		echo '<h3 class="text-danger">Escolha entre 1 e 6 números!!!</h3>
			 </div>
			 <div class="w-100 text-center align-items-center justify-content-center">
			 <p><a href="#toptop"><strong>Voltar</strong></a></p>
			 </div>
			 <script>
             window.location.href="#sort";
             </script>
             <hr>';
		return false;
		die();
		
	}
	
	for ( $p = 0; $p < $quant_sort; $p += 1)
	{
	
		$pp = $p += 1;
		sorteio($arr1, $pp, $arr3);
		$pp = $p -= 1;
				
	}
		
		echo '</div><div class="w-100 text-center align-items-center justify-content-center">
		    <p><a href="#toptop"><strong>Voltar</strong></a></p>
		    </div><hr>';

}

function sorteio($pst, $np, $arr3)
{

	$arr1 = range(1,25);
	$arr2 = range(1,25);
	$troca = array(0, 5, 10, 15, 20);
	
	shuffle($pst);
	
	echo '<div class="sort"><table><tr class="titulo_td"><td>Sorteio - '.$np.'</td><tr>';
	
	
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

		echo '</table></div><script>
            window.location.href="#anch";
            </script>
            ';
		unset ($pst);
		unset ($arr2);
		unset ($arr3);
		unset ($troca);
	
}
