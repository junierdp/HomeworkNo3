<?php
	include('dbConnection.php');
	include('components.php');

	$pokemon = new stdClass();

	if($_POST){
		$pokemon->Nombre = $_POST['iNombre'];
		$pokemon->Tipo = $_POST['iTipo'];
		$pokemon->Peso = $_POST['iPeso'];
		$pokemon->Experiencia = $_POST['iExperiencia'];
		$pokemon->Color = $_POST['iColor'];
		$pokemon->BatallasGanadas = $_POST['iBatallasGanadas'];
		$pokemon->BatallasPerdidas = $_POST['iBatallasPerdidas'];

		DB::insert('pokemon', $pokemon);
	}

	if(isset($_GET['delete'])){
		$id = $_GET['delete'] + 0;
		DB::delete('Personas', $id);
		header('location: Index.php');
	}
?>

<html>
	<head>
		<title>Pokemon</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
		<h1 class="text-center text-primary">Registro de Pokemon</h1>
		<form role="form" method="post" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="col-md-12">
				<div class="form-group col-md-3">
					<label for="iNombre">Nombre:</label>
					<input required type="text" class="form-control" id="iNombre" name="iNombre">
				</div>
				<div class="form-group col-md-3">
					<label for="iTipo">Tipo:</label>
					<select required class="form-control" id="iTipo" name="iTipo">
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
					<input required type="number" class="form-control" id="iPeso" name="iPeso">
				</div>
				<div class="form-group col-md-3">
					<label for="iExperiencia">Experiencia:</label>
					<input required type="number" class="form-control" id="iExperiencia" name="iExperiencia">
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="form-group col-md-2">
					<label for="iColor">Color:</label>
					<input required type="text" class="form-control" id="iColor" name="iColor">
				</div>
				<div class="form-group col-md-2">
					<label for="iBatallasGanadas">Batallas Ganadas:</label>
					<input required type="number" class="form-control" id="iBatallasGanadas" name="iBatallasGanadas">
				</div>
				<div class="form-group col-md-2">
					<label for="iBatallasPerdidas">Batallas Perdidas:</label>
					<input required type="number" class="form-control" id="iBatallasPerdidas" name="iBatallasPerdidas">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group col-md-6">
					<button required type="reset" class="btn btn-danger btn-block">Cancelar</button>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group col-md-6">
					<button required type="submit" class="btn btn-success btn-block">Guardar</button>
				</div>
			</div>
		</form>
		<?php
			$pokemon = DB::show('pokemon');

			$bGanadas = null;
			$bPerdidas = null;
			$porcentaje = null;

			function calcularPorcentaje($bGanadas, $bPerdidas){
				if($bGanadas > $bPerdidas){
					$o = ($bGanadas - $bPerdidas) / $bGanadas;
					$r = $o * 100;
					return $r . '%';
				}
				if($bPerdidas > $bGanadas){
					$o = ($bPerdidas - $bGanadas) / $bPerdidas;
					$r = $o * 100;
					return $r . '%';
				}
			}

			foreach ($pokemon as $row) {
				$bGanadas = $row->BatallasGanadas;
				$bPerdidas = $row->BatallasPerdidas;

				$row->Porcentaje = calcularPorcentaje($bGanadas, $bPerdidas);
				$row->X = "<a href=\"Index.php?delete={$row->Id}\"><span class=\"label label-danger\">Eliminar</span></a>";
			}

			$table = new table($pokemon);
			echo $table;
		?>
	</body>
</html>