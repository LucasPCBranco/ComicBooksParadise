<?php  
require 'conn.php';
?>
<?php
session_start();

?>
<html>
    <head
        <title>Comic Books Paradise</title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
        <script src="js/bootstrap.min.js"></script>

    </head>

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
                        
                        
                        <?php
                        if (!isset($_SESSION['email']) and !isset($_SESSION['senha'])) {
                            echo '<li><a class="dropdown-toggle" href="#" data-toggle="dropdown" ><span class="glyphicon glyphicon-log-in"></span> Login</a>
                            <ul class="dropdown-menu" role="menu" aria-labelle dby = "dLabel">
                                <li><a href="login.php">Login</a></li>
                                <li><a href="cadastro.php">Cadastrar-se</a></li>
                            </ul>
                        </li>';
                        }
                        else{
                            echo"<li><a href='logout.php' id='Sair'><span class='glyphicon glyphicon-log-out'></span> Sair</a></li>
                          ";
                            $emailuser= $_SESSION['email'];
                            $user= mysql_query("SELECT * FROM tbCliente WHERE email= '$emailuser'");
                    $Useru = mysql_fetch_array($user);
                           echo "<li><span class='glyphicon glyphicon-user'></span>Seja bem Vindo " . $Useru['Nome_Cliente'] ."</li>"; 
                        }
                        
                        ?>
                        <li><a href="contato.php" ><span class="glyphicon glyphicon-headphones"></span>Contato</a></li>
                        


                        
                        
                    </ul>
                </div>
            </div>
        </nav>
       <!--<script>
        (function ($) {
  $(document).ready(function(){

    // hide .navbar first
    $(".navbar").hide();

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 100) {
                $('.navbar').fadeIn();
            } else {
                $('.navbar').fadeOut();
            }
        });
    });

});
  }(jQuery));
  </script> -->

        <div id="parte1" class="container-fluid">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" data-wrap="true" pause="false">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active" content="5"></li>
                    <li data-target="#myCarousel" data-slide-to="1" content="5"></li>
                    <li data-target="#myCarousel" data-slide-to="2" content="5"></li>
                    <li data-target="#myCarousel" data-slide-to="3" content="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="IMG/KatnissEverpool.jpg" alt="Katniss">
                    </div>

                    <div class="item">
                        <img src="IMG/Eumesmo.jpg" alt="Eu">
                    </div>

                    <div class="item">
                        <img src="IMG/SuchHQ.jpg" alt="Such">
                    </div>

                    <div class="item">
                        <img src="IMG/woMandela.png" alt="Mandela">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

        <div id="parte2" class="container-fluid"><h1>Categorias</h1><br /><br/>
            <div class="produtos" ><br><a href="#HQs" id="ToggleMarvel" ><img src="IMG/marvel_comics-logo.jpg" style="width: 105%;" alt="marvel" align="center"></a></div>
            <div class="produtos"><a href="#HQsDC" id="ToggleDC" ><img src="IMG/DC_Comics_logo.png" style="width: 100%;" alt="DC"></a></div>
            <div class="produtos"><a href="#HQsNacionais" id="ToggleHue" ><img src="IMG/mapa_Brasil.png" style="width: 100%;" alt="Nacionais"></a></div>
            <div class="produtos"><a href="#Mangas" id="ToggleManga" ><img src="IMG/manga.png" style="width: 100%" alt="Mangás"></a></div>
            <h1> Não está interessado em HQs? <a> Conheça nossos outros produtos! </a></h1>

            <script>
                $(document).ready(function () {
                    $("#ToggleMarvel").click(function () {
                        $("#HQs").show();
                        $("#HQs").load('HQsMarvel.txt');
                    });

                });
            </script>        
        </div>
        <div id="HQs">



        </div>



    </body>
</html>