<?php

	
	ini_set('display_startup_erros', 1);
	ini_set('display_errors', true);
	error_reporting(E_ALL);
	
?>

<!DOCTYPE html>
<html lang= "pt-br">
    <head>
    <title>Estatísticas da LotoFácil</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </style>
		<link rel="stylesheet" href="./main.css">
	</head>
	<body>
		<div class="container-fluid" id="toptop">
	        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <span class="navbar-brand" href="#"></span>
                <span class="navbar-brand" href="#">Estatísticas Loto Fácil 🍀️</span>
                <div class="collapse navbar-collapse" id="textoNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link top" href="index.php">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link top" href="#informacao">Informações </a>
                    </li>
                </ul>
                </div>
                <span class="w-25">
                    <p class="text-white pt-3">Última atualização: <strong id="ultima_atualizacao"></strong></p>
                </span>
                <span class="w-25">
                    <button type="button" class="btn btn-success" onclick="">
                        Últimos <span class="top badge" id="ultimos"></span> sorteios:
                    </button>
                </span>
            </nav>
			<div class="row"> 
			<div class="d-flex flex-column col-6 text-center justify-content-center">
			<h4 class="">Escolha de 1 a 6 números.</h4>
			<h5>Os números escolhidos serão ignorados no sorteio.</h5>
	        <form action=<?php echo  $_SERVER['PHP_SELF'] ;?> method="post">
			<table class="tb_numeros_errados mt-3 ml-5">
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
			<div id="" class="pt-2 mt-2 pb-3">
			<h5>Escolha</h5>
			<p>Quantidade de sorteios</p>
			<p>(padrão é 10)</p>
			<select name="quant_sort">
			<?php 
				for ( $n = 0; $n < 10; $n += 1 )
				    {
			          
				        $n1 = $n += 1;
		                echo '<option value="'.$n1.'"';
					    echo $n1 == 10 ? 'selected="selected"' : null;
					    echo '>'.$n1.'</option>';  
			            $n1 = $n -= 1;        
			          
			        } 
			?>
			</select>
			<input class="btn btn-sm btn-primary" type="submit" name="sortear" value="Sortear">
			</div>
		    </form>
		    </div>
		    <div class="col-2 text-center pt-3 pb-3" id="one">
		        <h4>N vezes</h4>
		    </div>
		    <div class="col-3 text-center pt-3 pb-3" id="two">
		        <h4>Números sorteados</h4>
		    </div>
		    </div>
		</br>
		</br>
	</div>
		<hr id="sort">
		</br>
	<?php
		if ( isset($_POST['sortear']) )
		{
		
			require_once 'sorteio.php';
			novo_sort();
			unset ($_POST);
		
		}

	?>
	<div class="container text-center" id="informacao">
	<h2>Informações</h2>
	<h3>Resumo</h3>
	<p>O sistema escolhe 15 (quinze) números aleatoriamente, dentre 25 (vinte e cinco) números.</p>
	<p>O usuário escolhe, dentre os 25 números, os que quiser isolar da escolha aleatória.</p>
	<p>O usuário também pode escolher quantos sorteios desejar até o máximo de 10.</p>
	<p><a href="#toptop"><strong>Voltar</strong></a></p>
	<hr>
	</div>
	</div>
	</body>
	<script type="text/javascript" src="./matchLoto.js"></script>
</html>
