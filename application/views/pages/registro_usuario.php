<!-- banner Page
    ==========================================-->
<div id="page-banner" style="background-image: url(assets/img/photo-typo.jpg);">
	<div class="content  wow fdeInUp">
		<div class="container ">
			<h1>Typography </h1>
		</div>
	</div>
</div>

<!--page body-->

<div id="page-body">
	<div class="container">
		<div class="row  wow fdeInUp">
			<div class="col-md-9 col-sm-7 col-xs-12 page-block ">
				<h1>Registro de Usuarios</h1>
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
								<label for="txt_apellido_paterno">Apellido Paterno</label>
								<input type="text" class="form-control" id="txt_apellido_paterno"
									placeholder="Apellido paterno">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_apellido_materno">Apellido Materno</label>
								<input type="text" class="form-control" id="txt_apellido_materno"
									placeholder="Apellido materno">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_documento">Documento de identidad</label>
								<input type="text" class="form-control" id="txt_documento" placeholder="Documento">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_celular">Celular</label>
								<input type="text" class="form-control" id="txt_celular" placeholder="Celular">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
							<label for="cbo_tipo_cargo">Tipo Cargo</label>
								<select class="form-control combobox" name="cbo_tipo_cargo"
									style="height: 50px!important;">
									<option value="">Seleccione una opción</option>
									<option value="">Nacional</option>
									<option value="">Regional</option>
									<option value="">Provincial</option>
								</select>
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
								<label for="txt_base_rondera">Base rondera</label>
								<input type="text" class="form-control" id="txt_base_rondera" placeholder="Base rondera">
							</div>
						</div>

					</div>
					<div class="row">
						<div class="checkbox checkbox-success">
							<input name="checkCargo" id="checkCargo" type="checkbox"
								onchange="javascript:mostrarCargos()">
							<label> ¿Tiene Cargo Especial?</label>
						</div>
						<div class="col-lg-6" id="cargoRepresentante" style="display: block;">
							<div class="form-group">
								<label for="txt_cargo">Cargo</label>
								<input type="text" class="form-control" id="txt_cargo" placeholder="Cargo">
							</div>
						</div>
						<div class="col-lg-6" id="cargoNormal" style="display: none;">
							<div class="form-group">
								<label for="txt_cargo">Seleccione una opción</label>
								<div class="dropdown">
									<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1"
										data-toggle="dropdown" aria- haspopup="true"
										aria-expanded="true">Cargo&nbsp;<span
											class="glyphicon glyphicon-chevron-down"></span></button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Action 1</a></li>
										<li><a href="#">Action 2</a></li>
										<li><a href="#">Action 3</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="checkbox checkbox-success">
							<input name="cbofoto" id="cbofoto" type="checkbox" onchange="javascript:mostrarFoto()">
							<label> ¿Agregar fotografía?</label>
						</div>
						<div class="col-lg-6" id="fotografia" style="display: none;">
							<div class="form-group">
								<label for="txt_apellido">Fotografía</label>
								<input type="file" class="form-control" id="txt_apellido" placeholder="Apellido">
							</div>
						</div>

					</div>
					<div class="row">
						<div class="checkbox checkbox-success">
							<input name="cbofirma" id="cbofirma" type="checkbox" onchange="javascript:mostrarFirma()">
							<label> ¿Agregar firma? </label>
						</div>
						<div class="col-lg-6" id="firma" style="display: none;">
							<div class="form-group">
								<label for="txt_apellido">Firma</label>
								<input type="file" class="form-control" id="txt_apellido" placeholder="Apellido">
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

<div id="page-body">
	<div class="container">
		<div class="row wow fdeInUp">
			<!--blog posts container-->

			<!--blog posts container-->
			<div class="clearfix"></div>
		</div>
	</div>

</div>
