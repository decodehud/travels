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
	<title>Encuesta | travels</title>
</head>

<body>

	<div class="container d-flex flex-column">
		<div class="row align-items-center justify-content-center g-0 min-vh-100">
			<div class="col-lg-5 col-md-8 py-8 py-xl-0">
				<!-- Card -->
				<div class="card shadow mb-4">
					<!-- Card body -->
					<div class="card-body">
						<div class="mb-4">
							<form action="controllers/encuesta.php" method="POST">

								<div class="mb-3">
									<label class="form-label" for="edad">Nombre</label>
									<input type="text" class="form-control" name="nombre">
								</div>

								<div class="mb-3">
									<label class="form-label" for="edad">Edad</label>
									<input type="text" value="18" class="form-control" name="edad">
								</div>

								<div class="mb-3">
									<label for="sex">Genero</label>
									<div class="form-check">
										<input type="radio" name="genero" value="masculino" class="form-check-input" required>
										<label class="form-check-label" for="RadioMasculino">Masculino</label>
									</div>
									<div class="form-check">
										<input type="radio" name="genero" value="femenino" class="form-check-input">
										<label class="form-check-label" for="RadioFeminino">Femenino</label>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">A que lugar viaja con mas frecuencia ?</label>
									<select name="lugarViaje" class="form-control">
										<option value="europa">Europa</option>
										<option value="rusia">Rusia</option>
										<option value="estados unidos">Estados Unidos</option>
										<option value="Alemania">Alemania</option>
									</select>
								</div>

								<div class="mb-3">
									<label class="form-label" for="">¿Le gusta escuchar musica mientras viaja?</label>

									<div class="form-check">
										<input type="radio" name="musicaViaje" value="Si" class="form-check-input" required>
										<label class="form-check-label">Si</label>
									</div>
									<div class="form-check">
										<input type="radio" id="Radio2" name="musicaViaje" value="No" class="form-check-input">
										<label class="form-check-label">No</label>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">Cuando fue su ultimo viaje?</label>
									<input type="date" name="ultimoViaje" class="form-control">
								</div>

								<div class="mb-3">
									<label class="form-label">¿Debido a que es su viaje?</label>

									<div class="form-check">
										<input type="checkbox" name="motivoViaje" value="Negocios" class="form-check-input">
										<label class="form-check-label">Negocios</label>
									</div>
									<div class="form-check">
										<input type="checkbox" name="motivoViaje" value="Turismo" class="form-check-input">
										<label class="form-check-label">Turismo</label>
									</div>

								</div>


								<div class="mb-3">
									<label class="form-label">¿Dónde le gustaria alojarse?</label><br>
									<input type="search" name="lugarAloja" class="form-control" minlength="5" maxlength="100" required pattern="[A-ñZa-ñz 0-9 ]+">
								</div>

								<div class="mb-3">
									<label>¿Que le ha parecido nuestra atención en sus viajes?</label><br>

									<div class="form-check">
										<input type="checkbox" name="atencionViaje" value="bien" class="form-check-input">
										<label class="form-check-label">
											Bien
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="atencionViaje" value="mas o menos">
										<label class="form-check-label">Mas o menos</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="atencionViaje" value="exente atencion" required>
										<label class="form-check-label">Excelente atención</label>
									</div>
								</div>


								<div class="mb-3">
									<label class="form-label">¿Que tipo de viaje realiza?</label><br>

									<div class="form-check">
										<input class="form-check-input" type="radio" name="tipoViaje" value="nacional">
										<label class="form-check-label">Nacional</label>
									</div>

									<div class="form-check">
										<input class="form-check-input" type="radio" name="tipoViaje" value="internacional" required>
										<label class="form-check-label">Internacional</label>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">¿De cuanto tiempo sera su viaje?</label>
									<select name="tiempoViaje" class="form-control">
										<option value="3 meses">3 meses</option>
										<option value="6 meses">6 meses</option>
										<option value="9 meses">9 meses</option>
										<option value="1 año">1 año</option>
									</select>
								</div>

								<div class="mb-3">
									<label class="form-label">Cual es su opinion sobre nuestros
										servicios</label>
									<textarea class="form-control" name="opinion" placeholder="I love me travel" rows="3" required>
	</textarea>
								</div>

								<div class="mb-3">
									<label class="form-label">¿Cómo se le facilita contactarnos?</label>

									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="medioContacto" value="Call Center" required>
										<label class="form-check-label">
											Call Center
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="medioContacto" value="Correo Electronico">
										<label class="form-check-label">
											Correo Electronico
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="medioContacto" value="Redes Sociales">
										<label class="form-check-label">
											Redes Sociales
										</label>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label" for="range">¿Que nota le pone a nuestro servicio de
										viajes?</label>
									<input class="form-range" type="range" value="8" min="0" max="10" required id="range" oninput="txtResultado.value=parseInt(range.value)">
									<output required id="txtResultado"></output><br>

								</div>

								<div class="mb-3">
									<label class="form-label">¿Que le ha parecido el diseño de nuestro sitio
										web?</label><br>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="resenaSitio" value="Buen sitio">
										<label class="form-check-label">Bueno</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="resenaSitio" value="Bonito sitio">
										<label class="form-check-label">Bonito</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="resenaSitio" value="excelente sitio">
										<label class="form-check-label">Excelente</label>
									</div>
								</div><br>

								<div class="mb-3">
									<label class="form-label" for="selectOne">¿Que pagina de nuestro sitio debemos
										mejorar?</label>
									<select name="mejoraServicio" class="form-control">
										<option value="Login">Login</option>
										<option value="Contactenos">Contactenos</option>
										<option value="Ingreso de productos o servicios">Ingreso de productos o servicios</option>
										<option value="Registro nuevos clientes">Registro nuevos clientes</option>
										<option value="Pagina Productos y/o servicios">Pagina Productos y/o servicios</option>
									</select>
								</div><br>

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