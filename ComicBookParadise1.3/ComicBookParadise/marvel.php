<html>

    <title>Comic Books Paradise</title>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>


    <body   data-spy="scroll" data-target=".navbar" data-offset="10">


        <nav class="navbar navbar-inverse  navbar-fixed-top" id="nav">

            <div class="container-fluid" id="navi">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
                    <a class="navbar-brand" href="Index.php"><img src="IMG/icon.ico"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class=><a href="#parte1">Novidades</a></li>
                        <li><a href="#parte2">Categorias</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
                        <li><a class="dropdown-toggle" href="#" data-toggle="dropdown" ><span class="glyphicon glyphicon-log-in"></span> Login</a>
                            <ul class="dropdown-menu" role="menu" aria-labelle dby = "dLabel">
                                <li><a href="login.php">Login</a></li>
                                <li><a href="cadastro.php">Cadastrar-se</a></li>
                            </ul>
                        </li>


                        <li><a href="contato.php" ><span class="glyphicon glyphicon-headphones"></span>Contato</a></li>


                    </ul>
                </div>
            </div>
        </nav>
        
        <div id="logoMarvel">
            <img src="IMG\marvel_comics-logo.jpg" alt="Marvel Comics" />
        </div>
        
        <div class="container-fluid" id="ProdutosMarvel">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">MARVEL A</div>
        <div class="panel-body"><img src="IMG\SuchHQ.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><button type="button" class="btn btn-primary">Comprar</button></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">MARVEL B</div>
        <div class="panel-body"><img src="IMG\SuchHQ.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><button type="button" class="btn btn-primary">Comprar</button></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">MARVEL C</div>
        <div class="panel-body"><img src="IMG\SuchHQ.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><button type="button" class="btn btn-primary">Comprar</button></div>
      </div>
    </div>
  </div>
</div>
        
    </body>
    
</html>
