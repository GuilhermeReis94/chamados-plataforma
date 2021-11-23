
<?php
    if(isset($_POST['btnCadServico']))
    {
        salvar();
    }
	
    function salvar()
    {
            $codigo = $_POST['codigo'];
            $nome = $_POST['nome'];
            $setor = $_POST['setor'];
            $combo = $_POST['combo'];
            $desc = $_POST['descr'];
            $data = $_POST['data'];
			
			try{
				
			$con = new PDO("mysql:host=localhost;dbname=pecas", "root", "");
            
            $stmt = $con->prepare("INSERT INTO peca (codigo, nome, setor, combo, descricao, data) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bindParam (1, $codigo);
            $stmt->bindParam (2, $nome);
            $stmt->bindParam (3, $setor);
            $stmt->bindParam (4, $combo);
            $stmt->bindParam (5, $desc);
            $stmt->bindParam (6, $data);
            $stmt->execute();
            header('Location: cadServ.php');
			}
			catch(PDOException $e)
			{
				echo "Erro: " . $e->getMessage();				
			}
    } // chave do salvar
?> 