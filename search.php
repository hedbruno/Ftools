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
                 <input type="search" name="search" placeholder="Busca Profissionais" class="form-control" required>
                 </div> 
                 <button type="submit" class="btn btn-success">Porcurar</button>
              </form>
            </div>
		  <div class="container" id="resultado" >
			<div class="panel panel-default">
				
		  		 <div class="panel-body">
					<div class="table-responsive">
		            <table class="table table-bordered">
				 <tr>
				    <td>Login</td>
				    <td>Senha</td>
				    <td>Nome</td>
				    <td>CRFa </td> 
				    <td>Fone</td> 
				    <td>Email</td> 
				    <td>Editar</td>
				    <td>Excluir</td> 
				  </tr>
				  	<?php
		
						include 'conexao.php';
				   		$fono = mysql_query("select * from  tb_fono");
				   		//$fono = mysql_query("select * from  tb_fono join tb_contatos on cont_fono_id = fono_id");
				   		//$contatos = mysql_query("select * from tb_contatos");
				   		   		
				
						while ($sqlfono = mysql_fetch_assoc($fono)) {
							
						//$sqlcontatos = mysql_fetch_assoc($contatos);
						echo '
					   		 
						  <tr>
						    <td>'.$sqlfono['fono_login'].'</td>
						    <td>' . $sqlfono['fono_senha'] . '</td>
						    <td>' . $sqlfono['fono_nome'] . '</td>
						    <td>' . $sqlfono['fono_crfa'] . ' </td> 
						    <td>' . $sqlfono['fono_fone'] . ' </td> 
						    <td>' . $sqlfono['fono_email'] . ' </td>
						    <td>Editar</td>  
						    <td>Excluir</td>
						  </tr>';
						  }
		  			?>
		  
		  
				  </table>
				</div>
  		      </div>
  		    </div>
	     </div>
      
        
    </body>
</html>
	