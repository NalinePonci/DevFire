<html>

<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body>
    <nav>

        <div class="nav-wrapper">
            <div class="foto">

            </div>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">PAGINA INICIAL</a></li>
                <li><a href="#">MEU PERFIL</a></li>
                <!--modal-->
                <li><a data-target="modal1" class="btn modal-trigger" href="#modal1"><i class="medium material-icons">person</i></a></li>
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>
                <!--fim modal-->
                <li><a href="#"><i class="medium material-icons">person_add</i></a></li>
            </ul>
        </div>
    </nav>
    <script src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>


</body>

</html>