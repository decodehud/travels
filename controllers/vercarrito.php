<?php
session_start();
require('validacliente.php');
require('../views/theme.php');
require('../clientes/nav-cliente.php');
if (isset($_SESSION['carro']))
    $carro = $_SESSION['carro'];
else $carro = false;
?>
<html>

<head>
    <title>PRODUCTOS AGREGADOS AL CARRITO</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta charset="UTF-8">
</head>

<body>
    <h1 align="center">Carrito de Compras</h1>
    <br>
    <?php
    if ($carro) {
    ?>
        <table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr bgcolor="#333333" class="tit">
                <td width="105">Producto</td>
                <td width="207">Precio</td>
                <td colspan="2" align="center">Cantidad de Unidades</td>
                <td width="100" align="center">Borrar</td>
                <td width="159" align="center">Actualizar</td>
            </tr>
            <?php
            $color = array("#ffffff", "#F0F0F0");
            $contador = 0;
            $suma = 0;
            foreach ($carro as $k => $v) {
                $subto = $v['cantidad'] * $v['precio'];
                $suma = $suma + $subto;
                $contador++;
                //Creo una variable de sesion y le asigno el total a pagar
                $_SESSION['ValorPagar'] = $suma;
            ?>
                <form name="a<?php echo $v['identificador'] ?>" method="post" action="addcarrito.php?<?php
                                                                                                        echo SID ?>&id=<?php echo $v['identificador'] ?>&ori=v">
                    <tr bgcolor="<?php echo $color[$contador % 2]; ?>" class='prod'>
                        <td><?php echo $v['descripcion'] ?></td>
                        <td><?php echo $v['precio'] ?></td>
                        <td width="43" align="center"><?php echo $v['cantidad'] ?></td>
                        <td width="136" align="center">
                            <input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8">
                            <input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>">
                        </td>
                        <td align="center"><a href="dellcarrito.php?<?php echo SID ?>&id=<?php echo $v['id']?>&ori=v"><img src="#" width="12" height="14" border="0"><i class="uil uil-multiply"></i></a></td>
                        <td align="center">
                            <input name="imageField" type="image" src="../img/update.png" width="20" height="20" border="0">
                        </td>
                    </tr>
                </form>
            <?php
            }
            ?>
        </table>
        <div align="center"><span class="prod">Total de Art&iacute;culos: <?php echo count($carro);
                                                                            ?></span>
        </div><br>
        <div align="center"><span class="prod">Total: $<?php echo number_format($suma, 2);
                                                        ?></span>
        </div><br>
        <div align="center"><span class="prod">Continuar la selecci&oacute;n de productos</span>
            <a href="catalogoproductos.php?<?php echo SID; ?>">
                <img src="imagenes/continuar.gif" width="13" height="13" border="0"></a>
        </div>
        <br>
        <div align="center">
            <a href="pagarcompra.php?<?php echo SID; ?>">
                <form action="#" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="TA7XXNK8MALS2">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>

        </div>
    <?php } else { ?>
        <p align="center"> <span class="prod">No hay productos seleccionados</span>
            <a href="catalogoproductos.php?<?php echo SID; ?>">
                <img src="imagenes/continuar.gif" width="13" height="13" border="0"></a>
        <?php } ?>


        </p>
</body>

</html>