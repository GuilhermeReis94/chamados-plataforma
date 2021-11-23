<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- modal -->
        <title>Abrir Chamados</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-widht, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <LINK REL="SHORTCUT ICON" href="images/logo.png">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="background: linear-gradient(#B22222, white); background-repeat: no-repeat; align-items: center;
display: flex;
flex-direction: row;
flex-wrap: wrap;
justify-content: center;">
	<center>
        <div class="container">
		<br><br>
		<a href="login.html"><img src="images/logo.png" width="150px" alt=”Login ADM"/></a><br><br><br>
            <h2><i>ABRIR CHAMADO PARA A T.I.</i></h2>
			<br>
            <!-- Botão para carregar o modal -->
            <button type="button" class="btn btn-primary"
                    data-toggle="modal" data-target="#modalCli" style="width: 400px; height: 70px;">
                <strong>CLIQUE AQUI PARA ABRIR UM CHAMADO</strong>
            </button>
            <br><br>
            <a href="http://192.168.10.38/"><button type="button" class="btn btn-danger" style="width: 200px; height: 70px;">
                <strong>VOLTAR</strong>
            </button></a>
            
            <?php $con = new PDO("mysql:host=localhost;dbname=pecas", "root", "");
            $sql = 'SELECT codigo, nome, setor, situacao, data FROM peca';
            ?>
            
    
            <!-- Modal Cliente -->
            <div class="modal fade" id="modalCli">
            <div class="modal-dialog">
                <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Informações para abertura</h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <!-- Modal body -->
            <div class = "modal-body">
               <form action = "cadChamaTry.php" method = "post">
				<label>Código AnyDesk (sem espaços):</label
				<br>
                <input type = "text" size = "40" required="required" name = "codigo"><br>
				<a href="docs/anydesk.pdf" target="_blank" style="font-size: 14px;">Como achar esse código?</a>
                <hr />
                <label>Nome Usuário: </label>
				<br>
                    <input type = "text" size = "40" required="required" name = "nome">
                    <hr />
                    <label>Unidade: </label>
			   <br>
			   <select name="unit" style="width:250px;">
				  <option value="ITP">Itapira</option>
				  <option value="SP">São Paulo</option>
                  <option value="TP">Três Pontas</option>
                  <option value="SC">Starcom</option>
				</select>
      <hr />
                    <label>Setor: </label>
				<br>
                <select name="set" style="width:250px;">
				  <option value="Adm. de Materiais">Adm. de Materiais</option>
				  <option value="Ambulatorio">Ambulatório</option>
                  <option value="CD">C.D.</option>
                  <option value="Cobranca">Cobrança</option>
                  <option value="Contabilidade">Contabilidade</option>
                  <option value="Compras">Compras</option>
                  <option value="Controladoria">Controladoria</option>
                  <option value="Controle de Producao">Controle de Produção</option>
                  <option value="Controle de Quailidade">Controle de Qualidade</option>
                  <option value="Corte e Costura">Corte e Costura</option>
                  <option value="Criacao e Modelagem">Criação e Modelagem</option>
				  <option value="DAT">DAT</option>
                  <option value="Diretoria">Diretoria Industrial</option>
                  <option value="E_commerce">E-commerce</option>
                  <option value="Eng. de Fabrica">Engenharia de Fábrica</option>
                  <option value="Eng. de Processo">Engenharia de Processo</option>
                  <option value="Eng. de Produtos">Engenharia de Produtos</option>
                  <option value="Ferramentaria">Ferramentaria</option>
                  <option value="Financeiro">Financeiro</option>
                  <option value="Fiscal">Fiscal</option>
                  <option value="Gerencia de Producao">Gerência de Produção</option>
                  <option value="Injecao">Injeção</option>
                  <option value="Laboratorio">Laboratório</option>
                  <option value="Licitacoes">Licitações</option>
				  <option value="Loja de Fabrica">Loja de Fábrica</option>
                  <option value="Manutencao">Manutenção</option>
                  <option value="Montagem">Montagem</option>
                  <option value="Portaria">Portaria</option>
                  <option value="PCP">PCP</option>
                  <option value="Planejamento / Custos">Planejamento / Custos</option>
                  <option value="Prep. de Plasticos">Preparação de Plásticos</option>
                  <option value="Projeto de Embalagem">Projeto de Embalagem</option>
                  <option value="Recebimento">Recebimento</option>
                  <option value="Recepcao">Recepção</option>
                  <option value="RH">Recursos Humanos</option>
                  <option value="Seg_trabalho">Segurança do Trabalho</option>
                  <option value="TI">Tecnologia da Informação</option>
                  <option value="Tempos e Metodos">Tempos e Métodos</option>
				</select>
                    <hr />
                    <label>Serviço: </label>
			   <br>
			   <select name="combo" style="width:250px;">
				  <option value="Impressora">Impressora</option>
				  <option value="Windows">Windows</option>
                  <option value="Teclado">Teclado</option>
                  <option value="Mouse">Mouse</option>
				  <option value="Nobreak">Nobreak</option>
                  <option value="Telefone">Telefone</option>
                  <option value="Programas">Programas</option>
                  <option value="Certificado">Certificado Digital</option>
                  <option value="Emails">E-Mail</option>
                  <option value="Sapiens">Sapiens</option>
				  <option value="Transferir">Transferir Computador</option>
                  <option value="Geral">Problemas Gerais</option>
				</select>
      <hr />
                    <label>Descrição do Ocorrido: </label>
				<br>
					<textarea name="descr" rows="5" cols="50" maxlength="126" required="required" style="resize: none"></textarea>
                    <hr />
                    <label>Data: </label>
					<br>
                    <input type = "date" name = "data" style="width:250px;">
                    <hr />
               
					<input type = "submit" name = "btnCadServico" onclick="msg()"
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
        <br><br><br>
       <footer><center><i>TECNOLOGIA DA INFORMAÇÃO<BR></i>versão 1.0</center></footer>
    </body>
    <script type="text/javascript" src="js/noti.js"></script>
</html>