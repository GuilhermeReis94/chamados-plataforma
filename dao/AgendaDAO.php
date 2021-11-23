<?php
class AgendaDAO
{
    public $codigo;
    public $descAgenda;

    public function __construct($codigo = false)
    {
        if ($codigo) {
            $this->codigo = $codigo;
        }
    }

     public function confirmar()
    {
        $sql = "UPDATE peca SET situacao = 'CONCLUIDO' WHERE codigo = ". $this->codigo;	
		
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=pecas', 'root', '');
        $conexao->exec($sql);
    }
	
	 public function desmarcar()
    {
        $sql = "UPDATE peca SET situacao = 'ANDAMENTO' WHERE codigo = ". $this->codigo;	
		
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=pecas', 'root', '');
        $conexao->exec($sql);
    }

    public function excluir()
    {
        $sql = "DELETE FROM peca WHERE codigo=". $this->codigo;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=pecas', 'root', '');
        $conexao->exec($sql);
    }

}
?>