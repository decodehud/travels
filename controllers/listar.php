
            <?php     
                require('../controllers/conexion.php');
            
                if(!$conexion){
                    die('error en la conexion');
                }

                $contacto = "SELECT * FROM contacto";
                $resultadoContacto = mysqli_query($conexion, $contacto);

                $usuario ="SELECT * FROM usuario";
                $resultadoUsuario = mysqli_query($conexion,$usuario);

                $encuesta ="SELECT * FROM encuesta";
                $resultadoEncuesta = mysqli_query($conexion,$encuesta);
                
                $producto ="SELECT * FROM productos ORDER BY nombre";
                $resultadoProducto = mysqli_query($conexion,$producto)


                // while($row = mysqli_fetch_assoc($resultado)){
                //     echo $row["idUsuario"];
                //     echo $row["nombre"];
                // }

            ?>  