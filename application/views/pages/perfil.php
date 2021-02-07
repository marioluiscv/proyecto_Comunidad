<div id="page-banner" style="background-image: url(img/photo-typo.jpg);">
	<div class="content  wow fdeInUp">
		<div class="container ">
			<h1>Mi Información </h1>
		</div>
	</div>
</div>

<div id="page-body">
	<div class="container">
		<div class="row wow fdeInUp">

			<div class="col-md-9 col-sm-7 col-xs-12 page-block">
				<h1>Mi Información</h1>
				<div>
					<div class="row">
						<div class="col-lg-4">
						</div>
						<div class="col-lg-4">
							<img src="<?php base_url() ?>assets/img/icons/profile_user_icon.png" alt="" height="150px">
						</div>
						<div class="col-lg-4">
						</div>
					</div>
				</div><br><br>

				<form action="">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_nombre">Nombre completo</label>
								<input type="text" class="form-control" id="txt_nombre" placeholder="Nombre">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_apellido">Apellidos</label>
								<input type="text" class="form-control" id="txt_apellido" placeholder="Apellido">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_documento">Documento de identidad</label>
								<input type="text" class="form-control" id="txt_documento" placeholder="Documento">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_telefono">Teléfono</label>
								<input type="text" class="form-control" id="txt_telefono" placeholder="Teléfono">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
                            <label for="cbo_departamento">Departamento</label>
								<select class="form-control combobox" name="cbo_departamento"
									style="height: 50px!important;">
									<option value="">Opción 1</option>
									<option value="">Opción 2</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="cbo_provincia">Provincia</label>
								<select class="form-control combobox" name="cbo_provincia"
									style="height: 50px!important;">
									<option value="">Opción 1</option>
									<option value="">Opción 2</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="cbo_distrito">Distrito</label>
								<select class="form-control combobox" name="cbo_distrito"
									style="height: 50px!important;">
									<option value="">Opción 1</option>
									<option value="">Opción 2</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_direccion">Dirección</label>
								<input type="text" class="form-control" id="txt_direccion" placeholder="Dirección">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_baseRondera">Base rondera</label>
								<input type="text" class="form-control" id="txt_baseRondera" placeholder="Base Rondera">
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="img_foto">Fotografía</label>
								<input type="file" class="form-control" id="img_foto" placeholder="Agregar Foto">
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="img_firma">Firma</label>
								<input type="file" class="form-control" id="img_firma" placeholder="Agregar Firma">
							</div>
						</div>

					</div>
				</form>

			</div>
			<aside class="col-md-3 col-sm-5" style="padding:0;">

				<section class="widget widget_categories  wow fdeInUp">
					<h2 class="widget-title">Actividades</h2>
					<ul>
						<li><a href="registrar_usuario"> Registrar Usuarios </a> </li>
						<li><a href="listado_usuarios"> Ver usuarios registrados</a> </li>
						<li><a href="#"> Reporte de usuarios </a> </li>
						<li><a href="perfil"> Mi perfil</a> </li>
						<li><a href="logout"> Cerrar sesión</a> </li>
					</ul>
				</section>

			</aside>
		</div>
	</div>
</div>
