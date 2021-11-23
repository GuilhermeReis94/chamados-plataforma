
<?php
    if(isset($_POST['btnCadServico']))
    {
        salvar();
    }
	
    function salvar()
    {
            $codigo = $_POST['codigo'];
            $nome = $_POST['nome'];
            $setor = $_POST['set'];
			$unit = $_POST['unit'];
            $combo = $_POST['combo'];
            $desc = $_POST['descr'];
            $data = $_POST['data'];
			
			try{
				
			$con = new PDO("mysql:host=localhost;dbname=pecas", "root", "");
            
            $stmt = $con->prepare("INSERT INTO peca (codigo, nome, unit, setor, combo, descricao, data) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bindParam (1, $codigo);
            $stmt->bindParam (2, $nome);
			$stmt->bindParam (3, $unit);
            $stmt->bindParam (4, $setor);
            $stmt->bindParam (5, $combo);
            $stmt->bindParam (6, $desc);
            $stmt->bindParam (7, $data);
            $stmt->execute();
            header('Location: index.php');
			}
			catch(PDOException $e)
			{
				echo "Erro: " . $e->getMessage();				
			}
    } // chave do salvar
?> 