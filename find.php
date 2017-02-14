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
	     
	     / Salva o que foi buscado em uma variável
22	$busca = $_GET['consulta'];
23	// Usa a função mysql_real_escape_string() para evitar erros no MySQL
24	$busca = mysql_real_escape_string($busca);
25	 
26	// ============================================
27	 
28	// Monta outra consulta MySQL para a busca
29	$sql = "SELECT * FROM `noticias` WHERE (`ativa` = 1) AND ((`titulo` LIKE '%".$busca."%') OR ('%".$busca."%')) ORDER BY `cadastro` DESC";
30	// Executa a consulta
31	$query = mysql_query($sql);
32	 
33	// ============================================
34	 
35	// Começa a exibição dos resultados
36	echo "<ul>";
37	while ($resultado = mysql_fetch_assoc($query)) {
38	$titulo = $resultado['titulo'];
39	$texto = $resultado['texto'];
40	$link = 'http://www.meusite.com.br/noticia.php?id=' . $resultado['id'];
41	echo "<li>";
42	echo '<a href="'.$link.'" title="'.$titulo.'">'.$titulo.'</a><br />';
43	echo date('d/m/Y H:i', strtotime($resultado['cadastro']));
44	echo '<p>'.$texto.'</p>';
45	echo '<a href="'.$link.'" title="'.$titulo.'">'.$link.'</a>';
46	echo "</li>";
47	}
echo "</ul>";
?>