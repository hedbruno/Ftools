<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
        <title></title>
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="style/estilos.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
    </head>
    <body>

        <!-- Barra superior + login -->
            <div class="navbar navbar-inverse navbar-fixed-top">
                <form class="navbar-form navbar-right" role="form" action="porteiro.php" method="post">
                    <div class="form-group">
                      <input type="text" name="login"  placeholder="Login" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass" placeholder="Senha" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Entrar</button>
              </form>
            </div>
         
       
          <!-- Cadastro -->

          
        <form action="index.php" method="post" class="form-signin" role="form" >
            
            <input type="text" placeholder="Login" class="form-control" name="c_log" required ><br>
            
            <input type="password" placeholder="Senha" class="form-control" name="c_senha" required><br>
            <input type="password" placeholder="Confirmar senha" class="form-control" name="c_senha" required><br>
            <input type="text" placeholder="Nome" class="form-control" name="c_name" required><br>
            <input type="text" placeholder="CRFa " class="form-control" name="c_crfa" required><br>
            <input type="tel" placeholder="(00)2233-4455" class="form-control" name="c_fone" pattern="[\(]\d{2}[\)]\d{4}[\-]\d{4}" required><br>
            <input type="email" placeholder="seu@email.com" class="form-control"  name="c_email" lass="controls controls-row" required ><br>
            <button type="submit" class="btn btn-lg btn-primary btn-block" >Cadastrar</button>
            
        </form>
    </body>
</html>

<?php

        
    $user = $_POST['c_log'];
    $pwd =  $_POST['c_senha'];
    $nome = $_POST['c_name'];
    $crfa = $_POST['c_crfa'];
    $tel = $_POST['c_fone'];
    $correio = $_POST['c_email'];

	if($user == '' || $pwd == '' || $nome == '' || $crfa == '' || $tel == '' || $correio == ''){
		//header("location: index.php");
		//echo "<script>alert('um dos campos esta fazio');</script>";
	}else{
		include 'conexao.php';
   		$fono = mysql_query("INSERT INTO tb_fono (fono_id,fono_login,fono_senha, fono_nome,fono_crfa,fono_fone,fono_email) 
   					VALUES ('','$user','$pwd','$nome','$crfa','$tel','$correio')"); 
   			   		
   		echo "<script>alert('Cadastro efetuado com sucesso');</script>";
   		
	}
	
?>