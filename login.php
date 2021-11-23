<?php
    if(isset($_POST['btnLogin']))
    {
        login();
    }

function login() {
         $nome = $_POST['nome']; 
         $senha = $_POST['senha'];
         $servidor = "localhost";
         $usuario = "root";
         $senhabd = "";
         $dbname = "pecas";
		
		try{
			$conn = mysqli_connect($servidor, $usuario, $senhabd, $dbname);


                $result_nome= "SELECT * FROM adm WHERE nome = '$nome'" ;
                $result_senha = "SELECT * FROM adm WHERE senha = '$senha'" ;
                
                $resultado_nome = mysqli_query($conn, $result_nome);
                $resultado_senha = mysqli_query($conn, $result_senha);
                if(mysqli_num_rows ($resultado_nome) > 0)
         {
                  if(mysqli_num_rows ($resultado_senha) > 0)
                  {
                           echo"<script language='javascript' type='text/javascript'>
                           window.location.href='cadServ.php'
                           </script>";
                  }else
                  {
                           echo"<script language='javascript' types='text/javascript'>
                          alert('Senha Incorreta!');
                           window.location.href='login.html'
                           </script>";  
                  }
         }
         else
         {
                  echo"<script language='javascript' types='text/javascript'>
                  alert('Usuário Incorreto!');
                  window.location.href='login.html'
                  </script>";  
         }

		}
		catch(PDOException $e)
		{
			echo "Erro: " . $e->getMessage();	
		}
    } // fim do login