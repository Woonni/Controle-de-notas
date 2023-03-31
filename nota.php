<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>
	     Calculo de notas
      </title>
   </head>
   <body>
      <center><strong>Controle de notas</strong></center> <br><br>   
	  <?php
	  	session_start();
		
	     $b1 = floatval($_POST['b1']);
		 $b2 = floatval($_POST['b2']);
		 $b3 = floatval($_POST['b3']);
		 $b4 = floatval($_POST['b4']);
		 $media = ($b1+$b2+$b3+$b4)/4;
		 echo "A média do aluno " . strtoupper($_POST['aluno']) . " é $media <br><br>";
		 if($media >= 7){
		    echo "APROVADO";
			$_SESSION['aprovado'] += 1;	 
		 }
		 else{
		    if($media < 2.5){
			   echo "REPROVADO";
			   $_SESSION['reprovado'] += 1;	
			}				
			else{
			   echo "RECUPERAÇÃO";
			   $_SESSION['recuperacao'] += 1;	
			}
		 }
		echo "<br><br>";

			$_SESSION['totalAlunos'] += 1;
			echo "Número de alunos informados: " . $_SESSION['totalAlunos'];

			$_SESSION['calculo'] = $media;
			$_SESSION['media'] += $_SESSION['calculo'];


			if($_SESSION['maior_media'] == 0 ) {
				$_SESSION['maior_media'] = $media;
				$_SESSION['maior_aluno'] = $_POST['aluno'];

			}else{
				if($media > $_SESSION['maior_media']){
					
					$_SESSION['maior_media'] = $media;
					$_SESSION['maior_aluno'] = $_POST['aluno'];
					
				}

		}

		if($_SESSION['menor_media'] == 0 ) {
			$_SESSION['menor_media'] = $media;
			$_SESSION['menor_aluno'] = $_POST['aluno'];

		}else{
			if($media < $_SESSION['menor_media']){
				
				$_SESSION['menor_media'] = $media;
				$_SESSION['menor_aluno'] = $_POST['aluno'];
				
			}

	}



			
			


		 
		 
	  ?>
	  <br><br>
	  <button onclick="history.back()"> Voltar </button> 
   </body>
</html>