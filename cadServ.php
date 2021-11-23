<!DOCTYPE html>
<html lang="pt-br">
<style>
body {
 background-image: url("images/fundoPanel.jpg");
 background-color: #cccccc;
 webkit-background-size: cover;
 moz-background-size: cover;
 o-background-size: cover;
 background-size: cover;
}
</style>

    <head>
        <!-- modal -->
        <title>Gerenciar Chamados</title>
        <meta http-equiv="refresh" content="30">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-widht, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <LINK REL="SHORTCUT ICON" href="images/logo.png">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
	<center>
	<br><br><br><br><br>
        <div class="container">
            <h2><i>GERENCIAR CHAMADOS</i></h2>
			<br>
            <!-- Botão para carregar o modal -->
            <!--<button type="button" class="btn btn-primary"
                    data-toggle="modal" data-target="#modalCli" style="width: 200px;">
                Cadastrar Serviço
            </button> 
			<br><br>-->
			<!-- <a href="cadServ.php" class="btn btn-success" style="width: 200px;">Atualizar</a>
			<br><br> -->
			<a href="login.html" class="btn btn-danger" style="width: 200px;">Sair</a>
            <br><br><br>
            
            <?php $con = new PDO("mysql:host=localhost;dbname=pecas", "root", "");
            $sql = 'SELECT codigo, nome, unit, setor, situacao, combo, descricao, data FROM peca';
            ?>
            
			<div class="conatiner theme-showcase">
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>AnyDesk</th>
							<th>Nome</th>
							<th>Un.</th>
							<th>Setor</th>
							<th>Situação</th>
							<th>Tipo</th>
							<th>Descrição</th>
							<th>Data</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($con->query($sql) as $linha){
								echo "<tr>";
									echo "<td>".$linha['codigo']."</td>";
									echo "<td>".$linha['nome']."</td>";
									echo "<td>".$linha['unit']."</td>";
         echo "<td>".$linha['setor']."</td>";
									echo "<td>".$linha['situacao']."</td>";
         echo "<td>".$linha['combo']."</td>";
         echo "<td>".$linha['descricao']."</td>";
         echo "<td>".$linha['data']."</td>";
									?>
									<td>
									  <a href="agenda-confirmar.php?codigo=<?php echo $linha['codigo'] ?>" 
										 class="btn btn-sm btn-success">Concluído</a>
										 
										 <a href="agenda-desmarcar.php?codigo=<?php echo $linha['codigo'] ?>" 
										 class="btn btn-sm btn-warning">Andamento</a>
										 
										 <a href="agenda-excluir.php?codigo=<?php echo $linha['codigo'] ?>" 
										 class="btn btn-sm btn-danger">Excluir</a>
									</td>
									</form>
								</tr>
								<br><br><br><br>
							<?php }	?>
					</tbody>
				</table>
				</div>
				</div>
            <!-- Modal Cliente -->
            <div class="modal fade" id="modalCli">
            <div class="modal-dialog">
                <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Informações</h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <!-- Modal body -->
            <div class = "modal-body">
               <form action = "cadServicoTry.php" method = "post">
				<label>Código AnyDesk:</label>
				<br>
                <input type = "text" size = "40" name = "codigo">
                <hr />
                <label>Nome Usuário: </label>
				<br>
                    <input type = "text" size = "40" name = "nome">
                    <hr />
                    <label>Setor: </label>
				<br>
                    <input type = "text" size = "40" name = "setor">
                    <hr />
                    <label>Serviço: </label>
			   <br>
			   <select name="combo">
				  <option value="Impressora">Impressora</option>
				  <option value="Windows">Windows</option>
                  <option value="Teclado">Teclado</option>
                  <option value="Mouse">Mouse</option>
				  <option value="NoBreak">NoBreak</option>
                  <option value="Telefone">Telefone</option>
				  <option value="Transferir">Transferir Equipamento</option>
                  <option value="Programas">Programas</option>
                  <option value="Certificado">Certificado Digital</option>
                  <option value="Emails">E-Mail</option>
                  <option value="Sapiens">Sapiens</option>
                  <option value="Geral">Problemas Gerais</option>
				</select>
      <hr />
                    <label>Descrição do Ocorrido: </label>
				<br>
                    <input type = "text" size = "40" name = "descr">
                    <hr />
                    <label>Data: </label>
					<br>
                    <input type = "date" size = "40" name = "data">
                    <hr />
               
					<input type = "submit" name = "btnCadServico" 
						value = "Cadastrar">
			   
			   </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                        data-dismiss="modal">
                            Fechar</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    </body>
</html>