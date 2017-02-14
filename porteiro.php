<?php 
    session_start(); 
    $username = $_POST['login']; 
    $passw = $_POST['pass'] ;
    
    // parametros para conexão no DB
    $db_server = 'localhost';
    $db_banco = 'fonotool_base';
    $db_user = 'fonotool_bruno';
    $db_pass = 'listras861125';
	
	//conectando ao db
	
	$con = mysql_connect($db_server,$db_user,$db_pass);
        mysql_select_db($db_banco) or 
        print (mysql_error());
    
    //include 'conexao.php';
    
    $consu = mysql_query("SELECT * FROM tb_fono WHERE fono_login= '$username' AND fono_senha= '$passw'");
    $num =  mysql_num_rows ($consu);
    if( $num > 0 ) { 
	    $_SESSION['username'] = $username;
	    $_SESSION['passw']  = $passw;
	    //echo "Ok, tudo certo<br>";
	    header("location: triagem.php");

    }else{
    	    session_destroy();
    	    mysql_close($con);
	    echo "<script>alert('Senha ou login incorreto');</script>";
	    header("location: index.php");
	    
	         
    }


?>