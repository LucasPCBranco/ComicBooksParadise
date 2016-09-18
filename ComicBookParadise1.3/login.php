<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
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
	<div id="Login" class="container-fluid">
            <form role="form" method="POST" action="authLogin.php">
		<div id="loginEmail" class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user">
			</i></span>
			<input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" />
		</div>
		<div id="loginSenha" class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock">
			</i></span>
			<input type="password" class="form-control"  id="senha" name="senha"placeholder="Senha" />
		</div>	
		<div id="btn-login">
		
		<a href="#" style="color: yellow; float: right;">Esqueci minha senha</a><br>
                <input id="btn-login" type="submit" class="btn btn-primary-sm" value="Entrar"></input>
		</div>
	</form>
	
</div>
</body>
</html>