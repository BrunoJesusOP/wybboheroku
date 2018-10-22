 <?php 
if (isset($_POST['submit'])) {
  //Inclui as classes controladoras
  require_once("../../controller/cadastro.controller.class.php");
  require_once("../../model/cadastro.class.php");
  //Criando as novas instancias das classes
  $controller = new cadastroController;
  $cadastro = new cadastro;

 
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

<form action="formulario_cadastro.php" method="post">
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Cadastro Cliente</h4>
      </div>
      <div class="modal-body">
        <div class ="row">
          <div class="col-12">
            <label for="nome_completo">Nome Completo:</label>
            <input name="nome_completo" type="text" class="styll form-control form-control-lg" placeholder="Nome Completo...">         
          </div>
          <div class="col-6">
            <label for="telefone">Telefone:</label>
            <input name="telefone" type="number" class="styll form-control form-control-lg" placeholder="Telefone...">

          </div>
          <div class="col-6">
            <label for="CPF">CPF:</label>
            <input name="CPF" type="number" class="mascara-cpfcnpj form-control form-control-lg" placeholder="CPF..." >

          </div>
          <div class="col-6">
            <label for="cor_veiculo">Cor do Veiculo:</label>
            <input name ="Cor_veiculo" type="text" class="mascara-cpfcnpj form-control form-control-lg" placeholder="Cor do veiculo..." >

          </div>
          <div class="col-6">
            <label for="placa_veiculo">Placa do Veiculo:</label>
            <input name ="Placa_veiculo" type="number" class="mascara-cpfcnpj form-control form-control-lg" placeholder="Placa do veiculo..." >

          </div>
          <div class="col-12">
            <label for="email">Email:</label>
            <input name="email" type="text" class="styll form-control form-control-lg" placeholder="Email...">         
          </div>
          <div class="col-6">
            <label for="senha">Senha:</label>
            <input name ="senha" type="text" class="styll form-control form-control-lg" placeholder="Senha...">         
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" name ="submit" value = "Salvar">Salvar</button>

      </div>
    </div>
  </div>
</div>
</form>
