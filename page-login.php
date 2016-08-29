<?php
/*
 Template Name: Login
 *
*/
?>

<?php get_header(); ?>


<div class="login">
	
		<div class="container left miga__de__pan">
			<a href="#">INICIO</a>&nbsp; >  &nbsp;<a href="#">Login</a>
		</div>
		
			<!-- Formulario de login Iladiba -->
			<div class="container">
				<div class="ten columns offset-by-one content__login">
					<h3>Suscripción Portal SALUD HOY</h3> <div class="line__suscripcion__home__login"></div>
					<div class="row">
						<div class="five columns">
							<h4>Ingrese con su cuenta de SALUD HOY</h4>
							<span>* Campos obligatorios</span>

							<form action="">
								<label>Usuario SALUD HOY (correo electrónico) *</label>
								<input type="text">

								<label>Contraseña *</label>
								<input type="text">
								<div class="btn__ingrese">
									<label><a href="#">¿Olvidó su contraseña?</a></label><input type="submit" value="Ingrese >">
								</div>
								<hr>

								<div class="btn__ingrese">
									<label><a href="#">¿No está registrado en SALUD HOY?</a></label><input type="submit" value="Cree su cuenta >">
								</div>
							</form>
						</div>

						<!-- Texto de suscribirse -->
						<div class="five columns offset-by-two text__suscribirse">
							<h4>Suscribirse a SALUD HOY le permite:</h4>
							<ul>
								<li>Tener acceso a todos los artículos del Portal.</li>
								<li>Poder descargar la revista ILADIBA.</li>
								<li>Obtener la última información sintetizada sobre temas de interés en el área de la salud.</li>
								<li>Recibir el newsletter SALUD HOY en su correo electrónico.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	</div>



<?php get_footer(); ?>