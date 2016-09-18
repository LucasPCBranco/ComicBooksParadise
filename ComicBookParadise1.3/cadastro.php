<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/jquery.maskedinput.js" type="text/javascript"></script>
        <script>JQuery(function($){
   
   $(".cep").mask("999-99-999"),{placeholder:"___.___.___-_"};
   $("#cpf").mask("999.9999.999-9");
   $("#ssn").mask("999-99-9999");
});</script>
</head>
<body>


<?php 
require 'conn.php';
$Estado= mysql_query("SELECT * FROM tbEstado");
$Cidade= mysql_query("SELECT * FROM tbCidade");
?>
<style>    
body{
background: radial-gradient(#2E4272, #061539);
}
</style>

 <nav class="navbar navbar-inverse  navbar-fixed-top" id="nav">
  
  <div class="container-fluid" id="navi">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="Index.php"><img src="IMG/favicon.ico"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="#parte1">Lançamentos</a></li>
        <li><a href="#parte2">Editoras</a></li>
      </ul>
    
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
        <li><a class="dropdown-toggle" href="#" data-toggle="dropdown" ><span class="glyphicon glyphicon-log-in"></span> Login</a>
		<ul class="dropdown-menu" role="menu" aria-labelle dby = "dLabel">
                    <li><a href="login.php">Login</a></li>
                    <li><a href="cadastro.php">Cadastrar-se</a></li>
		</ul>
        </li>
   
        <li><a href="#" ><span class="glyphicon glyphicon-headphones"></span>Contato</a></li>


      </ul>
    </div>
  </div>
</nav >
	
	<div id="logo" >
	<img src="IMG/LOGO TRY 3.png"/>
	</div>
	
<div  id="Cadastro" class="container-fluid">
            
    <form role="form" name="cadastro" method="POST">
            
                
                <div id="nomeCompleto" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil">
			</i></span>
                    <input type="text" class="form-control" id="nome" placeholder="Nome Completo" />
                </div>
		<div id="Estado" class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user">
			</i></span>
                    <select class="form-control" name="estado">
                    <option>Estado...</option>
		<?php while($Estad=mysql_fetch_assoc($Estado)) {  ?>
                <option value="<?php echo $Estad['idEstado'] ?>"><?php echo $Estad['Estado'] ?></option>
                <?php }?>
                    </select>
                    </div>
            
            <div id="Cidade" class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user">
			</i></span>
                    <select class="form-control" name="cidade">
                        <option>Cidade...</option>  

                        <?php while($Cid=mysql_fetch_array($Cidade)) {  ?>
                <option value="<?php echo $Cid['0'] ?>"><?php echo $Cidade['1'] ?></option>
                <?php }?>
                    </select>
                </div>
                <div id="CEP" class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user">
			</i></span>
			<input type="text" class="form-control" id="cep" placeholder="CEP" />
		</div>
                <div id="Endereco" class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user">
			</i></span>
			<input type="text" class="form-control" id="endereco" placeholder="Endereço" />
		</div>
                <div id="DtNascimento" class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user">
			</i></span>
			<input type="date" class="form-control" name="dtNasc"  id="dtNasc" placeholder="Data de Nascimento" />
		</div>
                <div id="CPF" class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user">
			</i></span>
			<input type="text" class="form-control" name="CPF"  id="cpf" placeholder="CPF" data-mask="###.###.###-#" />
		</div>
                
                <div id="cadastroemail" class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user">
			</i></span>
			<input type="email" class="form-control" id="email" placeholder="E-Mail" />
		</div>
            <div id="cadastroSenha" class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock">
			</i></span>
			<input type="password" class="form-control"  id="senha" placeholder="Senha" />
		</div>	
            <div id="cadastroConfSenha" class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock">
			</i></span>
			<input type="password" class="form-control"  id="senha" placeholder="Confirme sua Senha" />
		</div>	
               
        
		<div id="btn-cadastro">
		
		<a href="#" style="color: yellow; float: right;">Esqueci minha senha</a><br>
		<button id="btn-login" type="button" class="btn btn-primary-sm">Cadastrar-se</button>
		</div>
	</form>
	
</div>
</body>
</html>