<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center">
        <th height="100">Informações da Classe</th>
        <tr><!-- Quantidade alunos -->
            <td width="100%" height="30">
                <?php 
                    session_start(); 
                    echo "Numero de alunos informados: " . $_SESSION['totalAlunos'];
                ?>
            </td>
        </tr>
        <tr> <!-- M�dia da turma -->
            <td width="100%" height="30">
                <?php
                    $media = $_SESSION['media'];
                    $media_turma = $media / $_SESSION['totalAlunos'];
                    echo "Media da turma: " . $media_turma;
                ?>
            </td>
        </tr>
        <tr> <!-- Maior m�dia -->
            <td width="100%" height="30">
                <?php
                    echo "A maior media e " . $_SESSION['maior_media'] ." do aluno ". $_SESSION['maior_aluno'];
                ?>
            </td>
        </tr>
        <tr> <!-- Menor m�dia-->
            <td width="100%" height="30">
                <?php
                    echo "A menor media e " . $_SESSION['menor_media'] ." do aluno ". $_SESSION['menor_aluno'];
                ?>
            </td>
        </tr>
        <tr> <!-- Quantidade de aprovados (Qtt e %) -->
            <td width="100%" height="30">
                <?php 
                    $aprovados = $_SESSION['aprovado'] / $_SESSION['totalAlunos'] * 100;               
                    echo "Quantidade de aprovados: " . $_SESSION['aprovado'] . " e porcentagem e de " . $aprovados."%";
                ?>
            </td>
        </tr>
        <tr> <!-- Quantidade de reprovados (Qtt e %) -->
            <td width="100%" height="30">
                <?php
                    $reprovados = $_SESSION['reprovado'] / $_SESSION['totalAlunos'] * 100;                  
                    echo "Quantidade de reprovados: " . $_SESSION['reprovado'] . " e porcentagem e de ". $reprovados."%";
                ?>
            </td>
        </tr>
        <tr> <!-- Quantidade em recupera��o (Qtt e %)-->
            <td width="100%" height="30">
                <?php
                    $recuperacao = $_SESSION['recuperacao'] / $_SESSION['totalAlunos'] * 100;
                    echo "Quantidade de alunos em recuperacao: " . $_SESSION['recuperacao'] . " e a porcentagem e de ".$recuperacao."%";
                ?>
            </td>
        </tr>
        <tr>
            <td width="100%" height="100"><button onclick="history.back()"> Voltar </button></td>
        </tr>
    </table>
</body>
</html>