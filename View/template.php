<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future-se</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="<?php echo BASE_URL; ?>assets/css/slider.css" type="text/css" rel="stylesheet" media="screen,projection" />

</head>

<body>
    <header>
        <div class="row orange accent-3 valign-wrapper" style="height:50px">
            <div class="col s6 m6 l6 left">
                <div class="hide-on-large-only center-align left">
                    <a href="#" data-target="slide-out" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                </div>
            </div>
            <div class="col s6 m6 l6 right">
                <a class="right white-text " style="margin-left:40px; font-family: advent pro bold; font-size:25px;" 
                href="<?php echo BASE_URL; ?>controller/sobre">Sobre</a>
            </div>
        </div>
        <div class="container" style="width:90%">
            <nav style="min-height:200px; box-shadow: none;" class="row white valign-wrapper black-text">
                <div class="col s12 m12 l5 center-align">
                    <div class="hide-on-med-and-down left-align">
                        <h1 style="font-style: Impact, fantasy;font-size: 65px; font-weight:500 ">FUTURE-SE</h1>
                        <h6>Universidade Federal de Campina Grande</h6>


                    </div>
                    <div class="hide-on-large-only center-align">
                        <h1 style="font-style: Impact, fantasy;font-size: 65px; font-weight:500 ">FUTURE-SE</h1>
                        <h6>Universidade Federal de Campina Grande</h6>
                    </div>
                </div>
                <div class="col l7 hide-on-med-and-down">
                    <ul id="nav-mobile" class="right" style="font-style: Impact, fantasy;font-weight:700;">
                        <li><a class="black-text" href="http://futurese.aldeiabrejinhodaserra.com.br/" style="font-family: advent pro bold; font-size:25px;">Home</a></li>
                        <li><a class="black-text" href="http://futurese.aldeiabrejinhodaserra.com.br/controller/pros" style="margin-left:25px; font-family: advent pro bold; font-size:25px;">Prós</a></li>
                        <li><a class="black-text" href="http://futurese.aldeiabrejinhodaserra.com.br/controller/contras" style="margin-left:25px; font-family: advent pro bold; font-size:25px;">Contras</a></li>
                        <li><a class="black-text" href="http://futurese.aldeiabrejinhodaserra.com.br/controller/contato" style="margin-left:25px; font-family: advent pro bold; font-size:25px;">Contato</a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </header>
    <main style="min-height:1000px">
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </main>
    <footer class="page-footer orange accent-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text" style="font-family:bebas neue">FUTURE-SE</h5>
                    <p class="grey-text text-lighten-4">Universidade Federal de Campina Grande <br><br> Site desenvolvido por Fernando Gabriel M. da Silva <br> Ciência da Computação</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="https://github.com/GALSANTA/futurese">Github</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/nandinhomarques/">Instagram</a></li>
                      
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2019 Copyright Text

            </div>
        </div>
    </footer>

    <ul id="slide-out" class="sidenav">
        <li><a class="black-text" href="http://futurese.aldeiabrejinhodaserra.com.br/" style="font-family: advent pro bold; font-size:25px;">Home</a></li>
        <li><a class="black-text" href="http://futurese.aldeiabrejinhodaserra.com.br/controller/pros" style="margin-left:25px; font-family: advent pro bold; font-size:25px;">Prós</a></li>
        <li><a class="black-text" href="http://futurese.aldeiabrejinhodaserra.com.br/controller/contras" style="margin-left:25px; font-family: advent pro bold; font-size:25px;">Contras</a></li>
        <li><a class="black-text" href="http://futurese.aldeiabrejinhodaserra.com.br/controller/contato" style="margin-left:25px; font-family: advent pro bold; font-size:25px;">Contato</a></li>
    </ul>

</body>
<script src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/materialize.min.js"></script>


<script>
    $(document).ready(function() {
        $('.slider').slider();
        $('.sidenav').sidenav();
        $('.collapsible').collapsible();
    });
</script>

</html>