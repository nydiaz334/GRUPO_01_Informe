<?php
	
	abstract class figura{
		private $tipo;
		private $a; //area	
		private $p; //perimetro
		public static function get_form(){
			$html = '
			<form name="figuras" method="POST" action="" >
			<div class="m-0 vh-100 row justify-content-center align-items-center" >
				<div class="rounded border border-dark col-auto bg-light p-5 text-center">
				<div class="panel panel-warning">
					<div class="panel-heading" >INGRESO DATOS DE LA FIGURA
					</div>
					
					<table class="table table-striped table-dark">
						<tr>
						<td class="bg-info">Tipo: </td>
						<td class="bg-info">
							<select name="tipo" OnChange=habilitar(document.figuras);>
								<option value="sel">Seleccione...</option>
								<option value="cuadrado">Cuadrado</option>
								<option value="rectangulo">Rectángulo</option>
								<option value="triangulo">Triángulo</option>
							</select>
						</td>
						<tr>
					<td class="bg-primary">Lado 1:</td>
					<td class="bg-primary"><input type="text" name="lado_1"size="4" disabled></td>
				</tr>
				<tr >
					<td class="bg-success">Lado 2:</td>
					<td class="bg-success"><input type="text" name="lado_2"size="4" disabled></td>
				</tr>
				<tr>
					<td class="bg-danger">Lado 3:</td>
					<td class="bg-danger"><input type="text" name="lado_3"size="4" disabled></td>
				</tr>								
				<tr>
					<th colspan="2"><center><button type="submit" name="calcular" class="btn btn-danger">Calcular</button><center></th>
				</tr>
					</table>
				</div>
				</div>
				</div>
			
			</form>';
			return $html;
		}
		public abstract function getArea();
	    
	    
	    public abstract function getPerimetro();
	    
	    
	    public abstract function getTipo();
	}
?>
