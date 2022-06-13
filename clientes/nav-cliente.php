<nav class="py-4 py-lg-3 pb-14 ">
    <div class="container">
        <div class="row card">
            <div class="flush-nav">
                <nav class="nav justify-content-md-center">
                    <a class="nav-link" href="../controllers/menucliente.php">Home</a>
                    <a class="nav-link" href="productosClientes.php">Ver Productos</a>
                    <a class="nav-link" href="pedidoCliente.php">Ver Pedidos</a>
                    <a class="nav-link" href="">

                        <?php
                        session_start();

                        echo ' ' . $_SESSION['vsNombre'] . ' ' . $_SESSION['vsApellido'];
                        ?>


                    </a>
                    <a class="nav-link" href="../controllers/cerrar_sesion.php"><i class="uil uil-signout"></i>Logout</a>
                    <a class="nav-link" href="../controllers/vercarrito.php"> <i class="uil uil-shopping-cart-alt"></i></a>

                </nav>
            </div>
        </div>
    </div>
</nav>