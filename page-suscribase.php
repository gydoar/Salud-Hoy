<?php
/*
 Template Name: Suscribase
 *
*/
?>

<?php get_header(); ?>

<div class="suscribase">

		<div class="container left miga__de__pan">
			<a href="#">INICIO</a>&nbsp; >  &nbsp;<a href="#">Suscríbase</a>
		</div>

		<div class="container">
			<div class="six columns offset-by-three content__suscribase">
				<h3>Cree su cuenta SALUD HOY</h3>
				
				<form action="">
					<div class="width-90">
						<span>* Campos obligatorios</span>
						<div class="form-group">
							<label>Correo electrónico *</label>
							<input type="text">
						</div>
					</div>
						
					
					<div class="row width-90">
						<div class="six columns">
							<div class="form-group">
								<label>Contraseña *</label>
								<input type="text">
							</div>
						</div>
						<div class="six columns">
							<div class="form-group">
								<label>Confirmar contraseña *</label>
								<input type="text">
							</div>
						</div>
					</div>

					<hr>
					
					<div class="row width-90">
						<div class="six columns">
							<div class="form-group">
								<label>Nombres *</label>
								<input type="text">
							</div>
						</div>
						<div class="six columns">
							<div class="form-group">
								<label>Apellidos *</label>
								<input type="text">
							</div>
						</div>

						<div class="twelve columns">
							<div class="form-group">
								<label>Dirección *</label>
								<input type="text">
							</div>
						</div>

						<!-- País  y ciudad -->
						<div class="row">
							<div class="six columns">
								<div class="form-group">
									<label>País</label>
									<select>
									  <option value="colombia">Colombia</option>
									  <option value="panama">Panamá</option>
									</select>
								</div>
							</div>
							<div class="six columns">
								<div class="form-group">
									<label>Ciudad</label>
									<select>
									  <option value="bogota">Bogotá</option>
									  <option value="Valledupar">Valledupar</option>
									</select>
								</div>
							</div>
						</div>
						
						<!-- Código postal -->
						<div class="row">
							<div class="six columns">
								<div class="form-group">
									<label>Código Postal</label>
									<input type="text">
								</div>
							</div>
							<div class="six columns">
								<div class="form-group">
									<label>Teléfono</label>
									<input type="text">
								</div>
							</div>

							<div class="twelve columns">
								<div class="form-group">
									<label>Profesión u Ocupación *</label>
									<select>
									  <option value="medico general">Médico general</option>
									  <option value="enfermera">Enfermera</option>
									</select>
								</div>

								<div class="form-group">
									<label>Temas de Interés *</label>
									<select>
									  <option value="salud niños">Salud niños</option>
									  <option value="enfermedades">Enfermedades</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<hr>

					<!-- Aceptar los terminos -->

					<div class="check__condiciones center">
						<input type="checkbox" name="politicas" value="politicas"> Acepto que estoy de acuerdo con los <a target="new" href="#">términos de uso y  políticas privacidad.</a><br>
						<input type="submit" value="Registrarse >">
					</div>
				</form>
			</div>
		</div>

	</div>

<?php get_footer(); ?>