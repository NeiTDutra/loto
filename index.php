<?php

	
	ini_set('display_startup_erros',1);
	ini_set('display_errors', true);
	error_reporting(E_ALL);

	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Acerte Errando</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<div class="container">
			<div class="top">
				<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#" >Organização</a></li>
				<li><a href="#">Informações</a></li>
				</ul>
			</div>
			<div class="formulario">
		<form action=<?php echo  $_SERVER['PHP_SELF'] ;?> method="post">
			<table class="tb_numeros_errados">
				<tr>
					<td>
						<input type="checkbox" id="n1" name="n1" value="1">
						<label for="n1">01</label>
					</td>
					<td>
						<input type="checkbox" id="n2" name="n2" value="2">
						<label for="n2">02</label>
					</td>
					<td>
						<input type="checkbox" id="n3" name="n3" value="3">
						<label for="n3">03</label>
					</td>
					<td>
						<input type="checkbox" id="n4" name="n4" value="4">
						<label for="n4">04</label>
					</td>
					<td>
						<input type="checkbox" id="n5" name="n5" value="5">
						<label for="n5">05</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" id="n6" name="n6" value="6">
						<label for="n6">06</label>
					</td>
					<td>
						<input type="checkbox" id="n7" name="n7" value="7">
						<label for="n7">07</label>
					</td>
					<td>
						<input type="checkbox" id="n8" name="n8" value="8">
						<label for="n8">08</label>
					</td>
					<td>
						<input type="checkbox" id="n9" name="n9" value="9">
						<label for="n9">09</label>
					</td>
					<td>
						<input type="checkbox" id="n10" name="n10" value="10">
						<label for="n10">10</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" id="n11" name="n11" value="11">
						<label for="n11">11</label>
					</td>
					<td>
						<input type="checkbox" id="n12" name="n12" value="12">
						<label for="n12">12</label>
					</td>
					<td>
						<input type="checkbox" id="n13" name="n13" value="13">
						<label for="n13">13</label>
					</td>
					<td>
						<input type="checkbox" id="n14" name="n14" value="14">
						<label for="n14">14</label>
					</td>
					<td>
						<input type="checkbox" id="n15" name="n15" value="15">
						<label for="n15">15</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" id="n16" name="n16" value="16">
						<label for="n16">16</label>
					</td>
					<td>
						<input type="checkbox" id="n17" name="n17" value="17">
						<label for="n17">17</label>
					</td>
					<td>
						<input type="checkbox" id="n18" name="n18" value="18">
						<label for="n18">18</label>
					</td>
					<td>
						<input type="checkbox" id="n19" name="n19" value="19">
						<label for="n19">19</label>
					</td>
					<td>
						<input type="checkbox" id="n20" name="n20" value="20">
						<label for="n20">20</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" id="n21" name="n21" value="21">
						<label for="n21">21</label>
					</td>
					<td>
						<input type="checkbox" id="n22" name="n22" value="22">
						<label for="n22">22</label>
					</td>
					<td>
						<input type="checkbox" id="n23" name="n23" value="23">
						<label for="n23">23</label>
					</td>
					<td>
						<input type="checkbox" id="n24" name="n24" value="24">
						<label for="n24">24</label>
					</td>
					<td>
						<input type="checkbox" id="n25" name="n25" value="25">
						<label for="n25">25</label>
					</td>
				</tr>
			</table>
			</br>
			<input type="submit" name="sortear" value="Sortear">
			<input type="submit" name="estatistica" value="Estatística">
		</form>
		</br>
		</br>
		<hr>
		</div>
	</div>
		</br>
		<div class="sort_container">
	<?php
		if ( isset($_POST['sortear']) )
		{
		
			require_once 'sorteio.php';
			novo_sort();
			unset ($_POST);
		
		}

	?>
	</div>
	</body>
</html>
