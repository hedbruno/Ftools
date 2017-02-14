<?PHP
session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['username']) and !isset($_SESSION['passw']) ) {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['username']);
    unset ($_SESSION['passw']);
     
    //Redireciona para a página de autenticação
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> sem nome ainda</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css"/>
       <link rel="stylesheet" href="style/estilos.css" type="text/css"/>
     <!--  <meta name="viewport" content="width=device-width, initial-scale=1.0">  -->
	   
    </head>
    <body id="tudo">
    
        
        <!-- Barra superior + login -->
            <div class="navbar navbar-inverse navbar-fixed-top">
                <form class="navbar-form navbar-right" role="form" action="porteiro.php" method="post">
                    
                    
              </form>
            </div>
        
        
        
            <div id="corpo" >
                <!-- #####Identificação primaria###### -->

				<div id="identificacao" class="form-group" >
                  <form  action="triagem_cadastro.php" method="post" class="form-horizontal" role="form">  
                         
	                <label>IDENTIFICAÇÃO</label><br>
 
	                <label>Maternidade</label> 
					<input type="text" size="65" autocomplete="on" name="maternidade" placeholder="Nome da maternidade" required >
	                <label>Leito:</label>
					<input type="text" name="leito" size="10" required><br>
							
	                <label>Nome da mãe:</label>
					<input  type="text" name="mae" size="50" autocomplete="on" placeholder="Nome da mãe" required>	                        
	                <label>Idade:</label> 
					<input name="idade" type="text" name="idade" maxlength="3" size="10"required><br>
							
					<label>Cartão do SUS:</label>
					<input name="sus" type="text" size="50" autocomplete="on" placeholder="numero cartao sus"required >
	                <label>Telefone: </label>
					<input name="fone" type="tel" name="telefone" placeholder="(84)1122-3344" pattern="[\(]\d{2}[\)]\d{4}[\-]\d{4}"required > 
                        
                    
				 </form>
               </div>
					<p>
					<p>




                <!-- #####Informações sobre o parto##### -->
                     
               
                    <div id="parto"> 
                        <label>PARTO/RECÉM NASCIDO</label><br>
                        
                        <label>Recém-nascido:</label><input name="Rnascido" type="text" size="80" placeholder="Nome do recem nascido" >
                        <label>Masculino</label> <input name="sex" type="radio">
                        <label>Feminino</label> <input name="sex" type="radio"><br>
                        
                        <label>Data de Nascimento:</label> <input name="datetime-local" type="date">
                        <label>Horas</label> <input name="hora" type="time">  
                       
                        <select name="rn_termo">
                            <option>RNPT</option>
                            <option>RNT</option>
                            <option>RN PÓS T</option>
                        </select>                       
                        
                       <label> Cesária</label> <input name="tparto" type="radio">
                       <label> Parto Normal</label> <input name="tparto" type="radio">
                       
                       <label> IG:</label> <input type="text" name="idade" maxlength="10" size="10"> 
                       <label> Peso Nascimento:</label> <input type="text" name="peso" maxlength="10" size="10">
                       <label> APGAR:</label> <input type="text" name="apgar" maxlength="10" size="10"><br>
                    </div>
                
                <!-- #####Indicadores##### -->
                 

                    <div id="indicadores">
                        <label>INDICADORES DE RISCO PARA ALTERAÇÃO AUDITIVA</label><br>
                        <div id="coluna_e">
                            <input type="checkbox" name="">Prematuridade<br>  
                        <input type="checkbox">Convulsões neonatais<br>
                        <input  type="checkbox">História familiar de DA <br> 
                        <input  type="checkbox">Icterícia – ex- sanguínea transfusão<br>
                        <input  type="checkbox">Consanguinidade <br> 
                        <input type="checkbox">Alcoolismo e/ou drogas na gestação<br>
                        <input  type="checkbox">Infecções congênitas <b>(rubéola, sífilis,<br> citomegalovírus,Herpes, toxoplasmose, AIDS)</b><br>
                        <input  type="checkbox">Peso<1.500 g<br> <!--colocar um if no capo peso-->
                        <input  type="checkbox">Má formação crânio facial <br>
                         <!--dividir aqui -->
                        </div> 
                        <div id="coluna_d">
                        <input type="checkbox">Meningite bacteriana <br>
                        <input  type="checkbox">Síndrome <br>
                        <input type="checkbox">Asfixia perinatal <br>
                        <input type="checkbox">APGAR : 0-4 (1`) ou 0-6 (5`) <br> <!--(condicional sem sentido ...)-->
                        <input type="checkbox">Ventilação Mecânica Prolongada ( > 5 dias) <br>
                        <input  type="checkbox">HPIV (Hemorragia Ventricular) <br>
                        <input type="checkbox">Displasia Broncopulmonar  <br>
                        <input  type="checkbox">Permanência na UTI (> 5 dias) <br>
                        <input name="RNPosT" type="checkbox">Drogas Ototóxicos (Aminoglicosídeos/diuréticos) <br>
                        <input type="checkbox">PIG <br>
                        </div>
                    </div>
 
                <!-- #####TRIAGEM##### -->

              
                    <div id="triagem">
                        TRIAGEM AUDITIVA<br>
                        
                      <div id="coluna_e">
                        EOAT: <br>
                        OD - passou <input name="OD" type="radio"> falhou <input name="OD" type="radio"><br>
                        OE- passou <input name="OE" type="radio"> falhou <input name="OE" type="radio"><br>
                        </div>

                       <div id="coluna_d">
                        PEATE:<br>
                        OD-passou <input name="PeatOD" type="radio"> falhou <input name="PeatOD" type="radio"><br> 
                        OE- passou <input name="PeatOE" type="radio"> falhou <input name="PeatOE" type="radio"><br>
                       </div
                        <br>
                        <br>
                        
                        Fonoaudióloga:<input name="Fono" type="text" size="30">
                        DATA: <input type="date" name="dia_triagem" >
                        Retestedia : <input type="date" name="data_reteste">
                        
                    </div>

                <!-- #####OBS##### -->

                <div id="obs">
                    
                    OBSERVAÇÕES:<br>
                    ALTA <input type="checkbox">
                    MONITORAMENTO <input type="checkbox">
                    DIAGNÓSTICO <input type="checkbox"><br>
                
                Fonoaudióloga: <input type="text" size="70autocomplete="on">
                DATA: <input type="date" name="data_obs" value="" size="20" /><br>

                <textarea name="Observacoes" cols="102"> </textarea><br>
                 <input type="submit">
                </div>
            </div>
            <footer id="finalmente">
      
                
            </footer>
        
    </body>
</html>