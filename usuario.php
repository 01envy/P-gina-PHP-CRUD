<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title> PAGINA BASE DE DATOS</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="estilo.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
</head>

    <script>
        function confirmacion(){
            var respuesta = confirm("Desea realmente borrar el registro?");
            if (respuesta == true){
                return true;
            } else {
                return false;
            }
        }
    </script>

<body>
    


    <div class="titulodb">
        <div class= "container" style="max-width: 50%;">
            <div class="text-center mt-5 mb-4">
                <h2> BUSQUEDA</h2>
            </div>

            <div class="barrabusqueda">
                <input type="text" class= "form-control" id="live_search" autocomplete="off" placeholder="Buscar...">
            </div>
        </div>

    </div>

    
    
    
    <div class="recuadro">
        <div class="container d-flex bg-dark text-light">
            
            <div class="col-md-3">
                <h2>Ingrese datos</h2>
                    <form action="insertar.php" method="POST">

                        <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario">
                        <input type="text" class="form-control mb-3" name="contrasena" placeholder="contrasena">
                        <input type="text" class="form-control mb-3" name="correo" placeholder="correo">
                        <div>
                        <label>Sexo: </label>
                        <input type="radio"
                            name="sexo"
                            value="Masculino"
                            checked>
                        <label>Masculino</label>

                        <input type="radio"
                            name="sexo"
                            value="Femenino">
                        <label>Femenino</label>
                        </div><br />
                        <input type="text" class="form-control mb-3" name="fechanac" placeholder="fechanac">
                        <input type="text" class="form-control mb-3" name="edad" placeholder="edad">
                                    
                        <input type="submit" class="btn btn-primary">
                    </form>
            </div>
            <div id ="searchresult"></div>
        </div>
            
        
    
    </div>














    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type= "text/javascript">
            $(document).ready(function(){
                $("#live_search").keyup(function(){
                    var input = $(this).val();
                    //alert(input);

                    if(input != ""){
                        $.ajax({
                            url:"livesearch.php",
                            method:"POST",
                            data:{input:input},

                            success:function(data){
                                $("#searchresult").html(data);
                            }
                        });
                    }else{
                        $("searchresult").css("display","none");
                    }
                });
            });
    </script>
</body>
</html>