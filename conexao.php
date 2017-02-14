<?PHP

	//parametros
	$db_server = 'localhost';
	$db_banco = 'fonotool_base';
	$db_user = 'fonotool_bruno';
	$db_pass = 'senha_db_aqui';
	
	//conectando ao db
	
	$con = mysql_connect($db_server,$db_user,$db_pass);
        mysql_select_db($db_banco) or 
        print (mysql_error()); 
     /*   if (!$con) 
            {echo "Falha ao tentar conex�o com o banco"; exit;}
        else{
             echo "erro ao conectar no banco";
             header("location: index.php");
            } */
            
?>	 