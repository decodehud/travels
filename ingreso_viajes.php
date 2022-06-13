<?php

require('./views/theme.php');
require('./views/nav.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso Viajes | Travels</title>
</head>

<body class="bg-oceans">

    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-lg-7 col-md-8 py-8 py-xl-0 mb-4">
                <div class="card shadow ">
                    <div class="card-body">

                        <form>
                            <div class=" row">
                                <form class="row">

                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="fname">Nombre <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" minlength="5" maxlength="10" required pattern="[A-Za-z0-9]+" placeholder=" First Name">

                                    </div>

                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="lname">Apellido<span class="text-danger">*</span></label>
                                        <input type="text" id="lname" class="form-control" minlength="5" maxlength="10" required pattern="[A-Za-z0-9]+" placeholder="Last Name">
                                    </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" minlength="4" maxlength="25" required pattern="[a-zA-Z0-9_\.\+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-\.]+" placeholder="desarollo_web@webinar.com.sv">
                                    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con
                                        nadie más.</div>
                                </div>

                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="nacionalidad">Nacionalidad</label>
                                <input type="text" id="nacionalidad" class="form-control" minlength="5" maxlength="20" required pattern="[A-Za-z ]+" placeholder="El salvador">

                            </div>

                            <div class="row">
                                <label for="inputState" class="form-label pt-3">Codigo de pais</label>
                                <select id="inputState" class="form-select col m-2">
                                    <option selected>+503</option>
                                    <option>+501</option>
                                    <option>+504</option>
                                    <option>+502</option>
                                    <option>+505</option>
                                    <option>+506</option>
                                    <option>+840</option>
                                    <option>+724</option>
                                </select>
                                <input type="text" id="textInput" class="form-control col m-2" placeholder="Tu Telefono*" minlength="8" maxlength="10" required pattern="[0-9]+">
                            </div>



                            <div class="mb-3">
                                <label class="form-label">Información de los nuevos viajes deseados</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        El salvador
                                    </label>
                                </div>


                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required="false">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Paris
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        España
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        USA
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Francia
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Mexico
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Polonia
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Alemania
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="inputState" class="form-label pt-3">Por favor, dínos los lugares que te
                                    gustaría visitar de los países que has seleccionado:</label>

                                <div class="mb-3 col-12">
                                    <label class="text-dark form-label" for="messages">Mensaje<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="messages" rows="5" placeholder="Your Mensaje here..." spellcheck="false" minlength="10" required></textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> Actividades o tour diarios, pueden ser compartidos o
                                    privados</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Cruceros en
                                        galápagos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Tours combinados, hotel-yate
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Tours empaquetados
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Tipo de Acomodacion</label><br>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" required>
                                    <label class="form-check-label" for="inlineCheckbox1">5
                                        Estrellas</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">3
                                        Estrellas</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">1
                                        Estrellas</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Por favor describenos que puede interesarte para tu nuevo
                                    paquete vacacional</label>

                                <div class="mb-3 col-12">
                                    <label class="text-dark form-label" for="messages">Mensaje<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="messages" rows="5" placeholder="Your Mensaje here..." spellcheck="false" minlength="10" required></textarea>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button class=" btn pink-btn" type="submit" value="enviar">Enviar</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>

<?php

require('./views/footer.php');
?>