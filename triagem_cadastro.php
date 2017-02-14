<?php

		star_session();
        
	    $local = $_POST['materniade'];
	    $leito =  $_POST['leito'];
	    $mae = $_POST['mae'];
	    $age = $_POST['idade'];
	    $tel = $_POST['fone'];
	    $sus = $_POST['sus'];

	if($local == '' || $leito == '' || $age == '' || $tel == '' || $correio == ''){
		//header("location: index.php");
		//echo "<script>alert('um dos campos esta fazio');</script>";
	}else{
		include 'conexao.php';
   		$maternidade = mysql_query("INSERT INTO tb_local (fono_id,loc_maternidade, loc_leito) VALUES ('','$local','$leito')");
   		
   		$ = mysql_query("INSERT INTO tb_mae(m_id,m_nome,m_idade,s_suscard,m_fone) VALUES ('', '$mae','$age','$sus','$fone')");
   		
	}
	
?>