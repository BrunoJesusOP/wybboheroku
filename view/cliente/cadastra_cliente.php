<?php 
if (isset($_POST['submit'])) {
	//Inclui as classes controladoras
	require_once("../../controller/cliente.controller.class.php");
	require_once("../../model/cliente.class.php");
	//Criando as novas instancias das classes
	$controller = new ClienteController;
	$cadastro = new cadastro;

	$cadastro->setIdcadastra($_POST['idcadastra']);
	$cadastro->setEmail($_POST['email']);
    $cadastro->setNome_completo($_POST['nome_completo']);
	$cadastro->setTelefone($_POST['telefone']);
	$cadastro->setCpf($_POST['CPF']);
	$cadastro->setCor_veiculo($_POST['Cor_veiculo']);
    $cadastro->setPlaca_veiculo($_POST['Placa_veiculo']);
	$cadastro->setSenha($_POST['senha']);
	

	$controller->save($cadastro);
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>	Formulário </title>
	<header>
		<h1>Cadastro de Cliente</h1></header>
</head>

<body>
	<form action="cadastra_cliente.php" method="post">
    <div>
        <label for="name">Nome:</label>
        <input type="text" name="nome" />
    </div>
    <div>
        <label for="Sobrenome">Sobrenome:  </label>
        <input type="Sobrenome" name="sobrenome" />
    </div>
    <div>
        <label for="email">E-mail:  </label>
        <input id="email" name="email" />
    </div>
    <div>
        <label for="telefone">Telefone:  </label>
        <input id="telefone" name="telefone" />
    </div>
    <div>
        <label for="celular">Celular:  </label>
        <input id="celular" name="celular" />
    </div>
    <div>
        <label for="endereco">Endereço:  </label>
        <input id="endereco" name="endereco" />
    </div>
    <div>
        <label for="numero">Numero:  </label>
        <input id="numero" name="numero" />
    </div>
    <div>
        <label for="bairro">Bairro:  </label>
        <input id="bairro" name="bairro" />
    </div>
    <div>
        <label for="id_cidade">ID Cidade:  </label>
        <input id="id_cidade" name="id_cidade" />
    </div>
    <div>
        <label for="CPF">CPF:  </label>
        <input id="CPF" name="CPF" />
    </div>
    <div>
        <label for="complemento">Complemento:  </label>
        <input id="complemento" name="complemento" />
    </div>
    <div class="button">
        <input type="submit" name="submit" value = "Salvar">
    </div>
</form>
</body>
</html>