<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon Genesis Evangelion</title>
    <link rel="stylesheet" href="cssfooter/all.min.css">
    <link rel="stylesheet" href="cssfooter/fontawesome.min.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/nerv.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    
</head>
<body>
    <div class="navegacion">
        <nav>
            <img src="logo2.png" width=200px height=auto>
            <ul>
                <div class="botonesnav">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Nosotros.html">Nosotros</a></li>
                    <li><a href="index.php">Historia</a></li>
                    <li><a href="index.php">Noticias</a></li>
                    <li>
                        
                        <button type="button" id="login" name="login" class="btn btn-dark" data-toggle="modal" data-target="#loginModal">
                            Login
                        </button>
                        


                    </li>
                </div>
            </ul>
        </nav>
    </div>



    <div class="modal fade text-white" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Bienvenido de vuelta</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="d-block">
                            <div class="col-8 col-sm">
                                <form>
                                    <h2 id="exo2">Inicio de sesión</h2>
                                    <div class="form-group">
                                                      
                                        <input type="text" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="Ingrese usuario" name="usuario">
                                        <small id="emailHelp" class="form-text text-muted">No compatiremos su información con nadie.</small>
                                    </div>
                                    <div class="form-group">
                                                      
                                        <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="contrasena">
                                    </div>
                                     <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Guardar datos</label>
                                    </div>
                                    
                                    <div class="d-block mt-3">
                                                                                                              
                                        <a href="registro.php" id="exo2"><i>No tienes cuenta?</i></a>                                                      
                                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="loginbutton" name="loginbutton"><i>Enviar</i></button> 
                    
                                  
                </div>
            </div>
        </div>
    </div>

    <div class= "presentacion">
        <div class="cajapresentacion">
            <h2 id="exo2">Sobre Nosotros</h2>
            <p>
                Fundada en XX/XX/XX, esta página sirve y funciona<br>
                como centro de noticias, wiki y foro e información<br>
                sobre todo lo relacionado a la famosa serie de los noventas<br>
                'Neon Genesis Evangelion' y todos sus derivados.

            </p>
            <a href="Nosotros.html">
                <button class="botonpresentacion" id="exo2">¿Quieres conocer más?</button>
            </a>
            
        </div>
    </div>

    <div class="titulonoticias">
        <h1 id="exo2">NOTICIAS</h1>
    </div>
    <div class="noticias">
        <div class="cajanoticias">
            <img src="img/noticia1.jpg" alt="noticia1">
            <h2 class="subrayado">Nueva película anunciada</h2>
            <p>
                Nuevo material se ha revelado sobre la nueva<br>
                película de la mítica série de los 90s la cual<br>
                tendrá de nombre "Evangelion Beyond" que cubrirá<br>
                los hechos abordados después de <br>
                Evangelion 3.0 + 1.0 Thrice Upon a time.
            </p>
        </div>
        <div class="cajanoticias">
            <img src="img/noticia2.jpg" alt="noticia2">
            <h2 class="subrayado">Se filtra nuevo material ilustrativo</h2>
            <p>
                Se ha filtrado el nuevo material ilustrativo el cual<br>
                servirá y sirvió como referencia para la creación de la serie<br>
                original de los finales de los noventas, esta reciente información<br>
                se logró obtener debido a que el director de animación de <br>
                de la primera serie lo publicó en su twitter.
            </p>
        </div>
    </div>

    <div class="black-noticia3">
        <div class="white-noticia3">
            <img class="img-noticia3" src="img/noticia3.jpg">
            <div>
                <h2 class="subrayado">Netflix compra los derechos de distribución de la serie.</h2>
                <p>La popular serie de culto ha llegado con todos sus episodios a Netflix. Era una de 
                    las series más esperadas de la plataforma.
                    Luego de meses de la emocionante noticia sobre la llegada de 
                    Neon Genesis Evangelion a Netflix, ahora por fin podremos disfrutar la serie en la plataforma.
                    La clásica serie de anime se unió al catálogo de Netflix este viernes 21 de 
                    junio desde horas de la madrugada
                    Además de la serie, las películas Death and Rebirth y The End of Evangelion también 
                    estan incluidas en el catálogo.  La obra de Hideaki Anno estará disponible en su 
                    totalidad en la plataforma en full definición y doblaje total al español.
                </p>
            </div>
        </div>
    </div>


    <div class="sabermas">
        <a href="index.html" id="exo2"><i>Saber más-></i></a>
    </div>

    <div class="historia">
        <div class="titulohistoria">
            <h1 id="exo2">HISTORIA</h1>
        </div>
        <p class="personajes"><i>Personajes</i></p>
        <div class="contenedor-cartas">
            <div class="cartas">
                <figure>
                    <img src="img/asuka.jpg" alt="asuka">
                </figure>
                <div class="contenido-carta">
                    <h3 id="exo2">Asuka Langely</h3>
                    <p>
                        Asuka Langley Soryu (惣流・アスカ・ラングレー, Sōryū Asuka Rangurē) es la Segunda niña<br>
                        elegida por el Instituto Marduk, designada como piloto del Evangelion Unidad 02.<br>
                        Segunda adolescente femenino<br>
                        Destacan de su aspecto su pelo rojo llameante, que recoge con sus Clips A10, y sus ojos azules,<br>
                        posiblemente provenientes de su herencia genética alemana. Su mejor amiga es su compañera y<br>
                         representante de clase, Hikari Horaki.
                    </p>
                    <a href="index.html">Leer más</a>
                </div>
            </div>
    
            <div class="cartas">
                <figure>
                    <img src="img/shinji.jpg" alt="shinji">
                </figure>
                <div class="contenido-carta">
                    <h3 id="exo2">Shinji Ikari</h3>
                    <p>
                        Shinji Ikari (碇シンジ, Ikari Shinji) es el tercer niño, el protagonista principal de la serie y<br>
                        piloto designado del Evangelion Unidad 01<br>
                        Shinji es hijo de la bioingeniera Yui Ikari y del jefe de la organización NERV, Gendo Ikari.<br>
                        Tras el fallecimiento de su madre, su padre lo abandonó, y vivió durante 11 años con su sensei.<br>
                        Sin embargo, su vida dio un giro inesperado cuando fue convocado a Tokio-3 para pilotar la Unidad-01<br>
                        y enfrentar a los Ángeles.
                    </p>
                    <a href="index.html">Leer más</a>
                </div>
            </div>
    
            <div class="cartas">
                <figure>
                    <img src="img/rei.jpg" alt="rei">
                </figure>
                <div class="contenido-carta">
                    <h3 id="exo2">Rei Ayanami</h3>
                    <p>
                        Rei Ayanami (綾波 レイ, Ayanami Rei)<br>
                        es la Primera niña elegida por el Instituto Marduk,<br>
                        designada como piloto del Evangelion Unidad 00.<br>
                        Rei vive en una calle desolada de Tokio-3, en el solitario apartamento número 402.<br>
                        Este apartamento demuestra que Rei lleva una vida monótona y aislada.<br>
                        Además, resulta ser una representación de la habitación subterránea en la que<br>
                        nació y se crió, según dice Ritsuko Akagi en el episodio 23.
                    </p>
                    <a href="index.html">Leer más</a>
                </div>
            </div>
        </div>



        <div class="historia2">
            <div class="txthistoria2">
                <h2 id="exo2">Cronologia</h2>
                <p class="parrafohistoria2">Nuevo material se ha revelado sobre la nueva<br>
                    película de la mítica série de los 90s la cual<br>
                    tendrá de nombre "Evangelion Beyond" que cubrirá<br>
                    los hechos abordados después de <br>
                    Evangelion 3.0 + 1.0 Thrice Upon a time.<br><br><br>
                    Se ha filtrado el nuevo material ilustrativo el cual<br>
                    servirá y sirvió como referencia para la creación de la serie<br>
                    original de los finales de los noventas, esta reciente información<br>
                    se logró obtener debido a que el director de animación de <br>
                    de la primera serie lo publicó en su twitter.<br><br><br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing<br>
                    elit. Sed corporis dolores id labore tempora odio unde? Ratione, unde<br>
                    repudiandae reprehenderit nihil molestias culpa dolorem at doloribus odio<br>
                    recusandae harum consectetur.<br><br><br>
                </p>
            </div>


            <div class="carrusel d-flex">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block mx-auto" src="img/test1.jpg" alt="First slide">
                            <div class="carousel-caption d-md-block bg-dark rounded">
                                <h1>Evangelion 1.0</h1>
                                <h3>You are (NOT) alone.</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block mx-auto" src="img/test2.jpg" alt="Second slide">
                            <div class="carousel-caption d-md-block bg-dark rounded">
                                <h1>Evangelion 2.0</h1>
                                <h3>You can (NOT) advance.</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block mx-auto" src="img/test3.jpg" alt="Third slide">
                            <div class="carousel-caption d-md-block bg-dark rounded">
                                <h1>Evangelion 3.0</h1>
                                <h3>You can (NOT) redo.</h3>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="footerfila">
                <div>
                    <ul>
                        <li>
                            <img class="imagenfooter" src="img/nerv.png">
                        </li>
                    </ul>
                </div>
                <div class="links">
                    <h4>Política</h4>
                    <ul>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Acuerdos</a></li>
                        <li><a href="#">Privacidad</a></li>
                    </ul>
                </div>

                <div class="links">
                    <h4>Ayuda</h4>
                    <ul>
                        <li><a href="#">Preguntas</a></li>
                        <li><a href="#">Soporte</a></li>
                        <li><a href="#">Errores</a></li>
                    </ul>
                </div>

                <div class="links">
                    <h4>Reglas</h4>
                    <ul>
                        <li><a href="#">Saber mas</a></li>
                        <li><a href="#">Archivos</a></li>
                        <li><a href="#">Manuales</a></li>
                    </ul>
                </div>

                <div class="links">
                    <h4>Síguenos</h4>
                    <div class="redes-sociales">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-tumblr"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    
    <div class="copyright">
        <img src="copyright.png" alt="copyright" width="20px">
        <h2>Copyright 2023 Fernando Véliz Silva</h2>
    </div>





    <script>
    $(document).ready(function(){
            $('#loginbutton').click(function(){
                var usuario = $('#usuario').val();
                var contrasena = $('#contrasena').val();
                if(usuario != '' && contrasena != '')
                {
                    $.ajax({
                        url:"action.php",
                        method:"POST",
                        data:{usuario:usuario,contrasena:contrasena},
                        success: function(data)
                        {
                            alert(data);
                            if (data == 'No')
                            {
                                alert("Datos equivocados.");
                            }
                            else
                            {
                                $('#loginModal').hide();
                                location.reload();
                            }
                        }
                    });
                }
                else
                {
                    alert ("Se requieren los dos campos.");
                }


            });
        });
    </script>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>