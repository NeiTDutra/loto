<?php


	ini_set('display_startup_erros', 1);
	ini_set('display_errors', true);
	error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
		<link rel="icon" type="image/jpg" href="./images/trevo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </style>
		<link rel="stylesheet" href="./main.css">
    <title>Alimentar dados</title>
  </head>
  <body>
    <div class="container h-100 text-center">
	    <h1 class="mt-2">Alimentar dados com últimos sorteios</h1>
	    <br>
	    <br>
			<div class="bg-success p-5 mb-5 row h-100 justify-content-center align-items-center">
	      <form class="col-9 w-50" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div class="form-group mb-3">
		        <label for="inputArray" class="text-white p-2">Insere os números</label>
		        <input id="inputArray" class="form-control" type="text" name="arrayNumbers" value="" autocomplete="off" autofocus>
					</div>
	        <input class="btn btn-primary" type="submit" name="gravar" value="Gravar">
	        <input class="btn btn-secondary" type="submit" name="sair" value="Sair">
	      </form>
	      <form class="col-3" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<div class="form-group mb-3">
		        <label for="inputData" class="text-white p-2">Último sorteio data</label>
		        <input id="inputData" class="form-control" type="date" name="nova-data" value="" autocomplete="off" autofocus>
		        <label for="inputN" class="text-white p-2">Último sorteio nº</label>
		        <input id="inputN" class="form-control" type="text" name="n-sorteio" value="" autocomplete="off" autofocus>
					</div>
	        <input class="btn btn-primary" type="submit" name="gravar-data" value="Gravar">
	        <input class="btn btn-secondary" type="submit" name="sair" value="Sair">
	      </form>
			</div>
  <?php

	  ini_set('display_errors', true);
    error_reporting(E_ALL);

    if(isset($_POST['gravar'])) {

      if($_POST['arrayNumbers'] === "") {

        echo '<p class="text-danger">Esta tentando gravar <strong>números sorteados vazio</storng>!</p>';
				die();
      }
			else {

        $t = trim($_POST['arrayNumbers']);
        $post = explode(' ', $t);
        
        echo '<p class="text-danger">Data string = ';

        foreach ($post as $key => $value) {

          $post[$key] = intval(trim($value));
          echo $value.'('.var_dump($post[$key]).') - ';
        }
        echo '</p>';
        echo '<p class="text-warning">Data integer = ';

        foreach ($post as $key => $value) {

          if(!is_int($value) || $value == 0) {

            echo '<p class="text-danger">Esta tentando gravar <strong>valor não numérico ou zero(s)</strong>!</p>';
				    die();
          }
          else {

            echo $value.' - ';
          }
        }
        echo '<br/>contagem - '.count($post).' numero(s)';
        echo '</p>';

        if(count($post) < 15) {

          echo '<p class="text-danger">Esta tentando gravar <strong>menos</strong> de 15 números!</p>';
				  die();
        }
        else if(count($post) > 15) {

          echo '<p class="text-danger">Esta tentando gravar <strong>mais</strong> de 15 números!</p>';
				  die();
        }
        else {

          $json = json_encode($post, JSON_PRETTY_PRINT);
          echo '<p class="text-success">Data json = '.$json.'</p>';

          $temp = file_get_contents('datanumbers.json');
          $temp = json_decode($temp,TRUE);
          $temp["data"][] = $post;

          echo '<pre class="text-secondary">';
          print_r($temp);

          file_put_contents('datanumbers.json', json_encode($temp, JSON_PRETTY_PRINT));

          unset($_POST);
          die();
        }
      }
    }
    else if(isset($_POST['sair'])) {

      unset($_POST);
      header('Location:./index.php');
      die();
    }
    else if(isset($_POST['gravar-data'])) {

      if($_POST['nova-data'] === "" || $_POST['n-sorteio'] === "") {

        echo '<p class="text-danger">Esta tentando gravar <strong>último sorteio vazio</storng>!</p>';
				die();
      }
      else {

        $n_d = new DateTime($_POST['nova-data']);
        $n_data = $n_d->format('d/m/Y');
        $n_sort = $_POST['n-sorteio'];

        echo '<p>Nova Data = '.$n_data.'</p>';
        echo '<p>Novo Sorteio nº = '.$n_sort.'</p>';
        die();
      }
    }
   ?>
 	</div>
</body>
</html>
