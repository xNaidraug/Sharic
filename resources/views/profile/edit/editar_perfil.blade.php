<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- Jquery -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <style>
        .onoffswitch {
            position: relative; width: 90px;
            -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
        }
        .onoffswitch-checkbox {
            display: none;
        }
        .onoffswitch-label {
            display: block; overflow: hidden; cursor: pointer;
            border: 2px solid #999999; border-radius: 20px;
        }
        .onoffswitch-inner {
            display: block; width: 200%; margin-left: -100%;
            transition: margin 0.3s ease-in 0s;
        }
        .onoffswitch-inner:before, .onoffswitch-inner:after {
            display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
            font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
            box-sizing: border-box;
        }
        .onoffswitch-inner:before {
            content: "ON";
            padding-left: 18px;
            background-color: #34A7C1; color: #FFFFFF;
        }
        .onoffswitch-inner:after {
            content: "OFF";
            padding-right: 18px;
            background-color: #EEEEEE; color: #999999;
            text-align: right;
        }
        .onoffswitch-switch {
            display: block; width: 17px; margin: 6.5px;
            background: #ffffff;
            position: absolute; top: 0; bottom: 0;
            right: 56px;
            border: 2px solid #999999; border-radius: 20px;
            transition: all 0.3s ease-in 0s;
        }
        .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
            margin-left: 0;
        }
        .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
            right: 0px;
        }
    .hola{
        border: solid 1px red;
        border-radius: 50%;
    }
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        #sortable li span { position: absolute; margin-left: -1.3em; }
    </style>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#sortable" ).sortable();
            $( "#sortable" ).disableSelection();
        } );
    </script>
</head>

<body>

<!-- Se configura el menú superior-->
<nav class="navbar navbar-inverse navbar-fixed-top">

</nav>

<!-- Contenido de la página -->
<div class="container">

    <!-- Encabezado de página / Breadcrumb -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Perfil de usuario
                <small>editando datos</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Index</a></li>
                <li><a href="#">Perfil de usuario</a></li>
                <li class="active">Editando datos</li>
            </ol>
        </div>
    </div>
    <!-- Fin Encabezado de página / Breadcrumb -->

    <!-- Contact Form -->
    <!-- Campos del formulario de contacto con validación de campos-->
    <div class="row">
        <!-- Columna de la izquierda -->
        <div class="col-md-3" style="border: 1px solid red" id="cont_izq">
            <div class="col-md-12 "  align="center" >
                <img class="hola" src="../../../../prueba.jpg">
            </div>
            <div class="col-md-12">
                <p class="text-center">Nombre de usuario</p>
            </div>

            <div class="col-md-12 text-center">
                <!-- Redes sociales-->
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="editIcons icon-facebook-square editSizeIcons"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="editIcons icon-linkedin-square editSizeIcons"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="editIcons icon-twitter-square editSizeIcons"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="editIcons icon-google-plus-square editSizeIcons"></i></a>
                    </li>
                </ul>
                <!-- Fin redes sociales -->
            </div>

        </div>
        <!-- Fin de Columna de la izquierda -->

        <!-- Parte central -->
        <div class="col-md-9">

            <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
                <h3 style="text-align: center">Mi perfil</h3>
            </div>
            <!-- Se inicia el form (ojo todos los elementos de formulario deben ir dentro de esta etiqueta-->
            <form name="modifyProfile" id="profileForm" novalidate="">
                <!-- Inicio del div central parte de formulario información básica -->
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="control-group form-group">
                            <div class="controls row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">Información del usuario</div>
                                <label for="" class="col-md-6">Nombre</label>
                                <input type="text" class="form-control form-control-error col-md-6" id="txtName" placeholder="Introduzca su nombre" required="" data-validation-required-message="Por favor introduzca su nomnbre.">

                                <div class="col-md-12"></div>
                                <label for="" class="col-md-6">Apellidos</label>
                                <input type="text" class="form-control col-md-6" id="txtSurname" placeholder="Introduzca sus apellidos" required="" data-validation-required-message="Por favor introduzca sus apellidos.">

                                <div class="col-md-12"></div>
                                <label for="" class="col-md-6"> Email</label>
                                <input type="email" class="form-control col-md-6" id="txtEmail" placeholder="Introduzca su email" required="" data-validation-required-message="Por favor introduzca su email.">

                                <div class="col-md-12"></div>
                                <label for="" class="col-md-6">Fecha de nacimiento</label>
                                <input type="text" class="form-control col-md-6" id="txtSurname" placeholder="Introduzca sus apellidos" required="" data-validation-required-message="Por favor introduzca sus apellidos.">


                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Descripción:</label>
                                <textarea rows="6" cols="30" class="form-control" id="txtBiography" required="" maxlength="999" style="resize:none" data-validation-required-message="Por favor introduzca su biografía deseada."></textarea>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin del div central parte de formulario información básica -->

                <!-- Parte central - enlaces -->
                <div class="col-md-12" style="border: 1px solid lightgrey; background: #e5eaf2;">
                    <div class="row">
                        <!-- Parte de top song y playlist -->
                        <div class="col-md-6" style="border: solid 1px red">
                            <div>Lista 2
                            <ul id="sortable">
                                <li class="ui-state-default"></li>
                                <li class="ui-state-default"></li>
                                <li class="ui-state-default"></li>
                                <li class="ui-state-default"></li>
                            </ul>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div>Lista 2
                            <ul id="sortable">
                                <li class="ui-state-default"></li>
                                <li class="ui-state-default"></li>
                                <li class="ui-state-default"></li>
                                <li class="ui-state-default"></li>
                            </ul>
                            </div>
                        </div>

                        <!-- Fin Parte de top song y playlist -->

                        <!-- Botones formulario -->
                        <div class="col-md-12 container allFormButtons">
                            <br>
                            <div class="col-md-2 col-md-offset-2">
                                <div class="form-group">
                                    <button type="button" id="btnCancel" class="btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-3">
                                <div class="form-group">
                                    <button type="button" id="btnClean" class="btn btn-warning">Limpiar</button>
                                    <button type="submit" id="btnEnviar" class="btn btn-primary" disabled="disabled">Actualizar</button>
                                </div>
                            </div>



                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        <!-- Fin botones formulario -->
                    </div>
                </div>
                <!-- Fin Parte central - enlaces -->
            </form>
            <!-- Fin del form -->
        </div>
        <!-- Fin del div de parte central -->
    </div>
    <!-- Fin Campos del formulario de contacto con validación de campos -->
    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">

        </div>
    </footer>

</div>
<!-- /.container -->




</body>
</html>