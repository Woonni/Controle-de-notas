<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>
	     Controle de notas - Liege Soares Berbetz e Eduardo Henrique Kaimoto
      </title>
   </head>
   <body>
    	<?php
		
	    session_start();
			if(!isset($_SESSION['totalAlunos'])){
				$_SESSION['totalAlunos'] = 0;
				$_SESSION['media'] = 0;	
				$_SESSION['maior_media'] = 0;
				$_SESSION['menor_media'] = 0;
				$_SESSION['aprovado'] = 0;
				$_SESSION['reprovado'] = 0;
				$_SESSION['recuperacao'] = 0; 
			}
		
		?>
    	<center><strong>Controle de notas</strong></center>
    	<form action = "nota.php" method = "post" >
		 
	  
	    	<table align="center" >
				<tr>
				<td>Aluno</td>
				<td><input type="text" name="aluno" size = "50" maxlength="50" style="text-transform:uppercase" required></td>
				</tr>
				<tr>
				<td>Primeiro bimestre</td>
				<td><input type="text" name="b1" size = "5" maxlength="5"></td>
				</tr>
				<tr>
				<td>Segundo bimestre:</td>
				<td><input type="text" name="b2" size = "5" maxlength="5"></td>
				</tr>
				<tr>
				<td>Terceiro bimestre:</td>
				<td><input type="text" name="b3" size = "5" maxlength="5"></td>
				</tr>			
				<tr>
				<td>Quarto bimestre:</td>
				<td><input type="text" name="b4" size = "5" maxlength="5"></td>
				</tr>
				<tr>
					<td><input align="center" type="submit" value="Calcular media"></td>
				</tr>
		 	</table> <br><br>
		 <br><br> 
      	</form> 
	  
	  
	<form action="resultados.php" align="center">
		<input type="submit" value="Resultados">
		<hr>
	</form>

    	<?php
			if(isset($_POST['aluno']) == true){
					$nome = strtoupper($_POST['aluno']);
					$b1 = floatval($_POST['b1']);
					$b2 = floatval($_POST['b2']);
					$b3 = floatval($_POST['b3']);
					$b4 = floatval($_POST['b4']);
					$media = ($b1+$b2+$b3+$b4)/4;
					echo "A m�dia do aluno $nome � $media";
			}			 
    	?> 	  
	</body>
</html>