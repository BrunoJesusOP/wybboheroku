<!DOCTYPE html PUBLIC 
"-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="icon" href="../../img/wybbo.png" type="wybbo.png" />
  <link rel="shortcut icon" href="../../img/wybbo.png" type="wybbo.png" />
  <link rel="stylesheet" type="text/css" href="../../css/stylo.css">
</head>
<head>
<?php 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }
 
$logado = $_SESSION['email'];
?>
 <?php
  echo" Bem-Vindo $logado";
  ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Histórico de Ocorrências</title>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
</head>
<body>
    <div class="container" id="tabela">
       <table>
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>GEF5570</td>
                    <td>Bruno Jesus Oliveira Pinho</td>
                    <td>19995449108</td>
                    <td>24/10/2018</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>       
    </div>
</body>
</html>
    