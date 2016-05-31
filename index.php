<html>
	<head>
		<title>Pokemon</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
		<h1 class="text-center text-primary">Registro de Pokemon</h1>
		<form role="form">
			<div class="col-md-12">
				<div class="form-group col-md-3">
					<label for="iNombre">Nombre:</label>
					<input type="text" class="form-control" id="iNombre" name="iNombre">
				</div>
				<div class="form-group col-md-3">
					<label for="iTipo">Tipo:</label>
					<select class="form-control" id="iTipo" name="iTipo">
						<option></option>
						<option value="Acero">Acero</option>
						<option value="Agua">Agua</option>
						<option value="Bicho">Bicho</option>
						<option value="Dragon">Dragon</option>
						<option value="Electrico">Electrico</option>
						<option value="Fantasma">Fantasma</option>
						<option value="Fuego">Fuego</option>
						<option value="Hada">Hada</option>
						<option value="Hielo">Hielo</option>
						<option value="Lucha">Lucha</option>
						<option value="Normal">Normal</option>
						<option value="Plata">Plata</option>
						<option value="Psiquico">Psiquico</option>
						<option value="Roca">Roca</option>
						<option value="Siniestro">Siniestro</option>
						<option value="Tierra">Tierra</option>
						<option value="Veneno">Veneno</option>
						<option value="Volador">Volador</option>
					</select>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group col-md-3">
					<label for="iPeso">Peso:</label>
					<input type="number" class="form-control" id="iPeso" name="iPeso">
				</div>
				<div class="form-group col-md-3">
					<label for="iExperiencia">Experiencia:</label>
					<input type="number" class="form-control" id="iExperiencia" name="iExperiencia">
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="form-group col-md-2">
					<label for="iColor">Color:</label>
					<input type="text" class="form-control" id="iColor" name="iColor">
				</div>
				<div class="form-group col-md-2">
					<label for="iBatallasGanadas">Batallas Ganadas:</label>
					<input type="number" class="form-control" id="iBatallasGanadas" name="iBatallasGanadas">
				</div>
				<div class="form-group col-md-2">
					<label for="iBatallasPerdidas">Batallas Perdidas:</label>
					<input type="number" class="form-control" id="iBatallasPerdidas" name="iBatallasPerdidas">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group col-md-6">
					<button type="reset" class="btn btn-danger btn-block">Cancelar</button>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group col-md-6">
					<button type="submit" class="btn btn-success btn-block">Guardar</button>
				</div>
			</div>
		</form>
	</body>
</html>