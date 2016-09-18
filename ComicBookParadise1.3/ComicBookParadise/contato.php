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
   
        <li><a href="contato.html" ><span class="glyphicon glyphicon-headphones"></span>Contato</a></li>


      </ul>
    </div>
  </div>
</nav>
	

	<div id="Contato" class="container-fluid">
		<h1>Contato</h1>
	<form role="form">
		<div class="form-group">
			<input type="email" class="form-control" id="email" placeholder="E-Mail">
		</div>
		<div class="form-group">
			<input type="textarea" class="form-control"  id="Mensagem" placeholder="Mensagem">
		</div>	
	</form>
                
</div>
    
</body>
</html>