<div>
	<button class="button"  data-open="form_agregar_salario"><i class="fas fa-plus"></i></button>


	<section class="reveal full" id="form_agregar_salario" data-reveal>

		<br>
		<div class="callout">
			<div class="grid-x grid-padding-x">
				<legend class="col small-12 medium-12 large-12"><h4>Formulario nivel salarial</h4> </legend>
				<div><button class="button" data-open="personalModal">Seleccionar proyecto</button></div>
				<table>
				<thead>
					<tr>
						<th>Proyecto</th>
						<th>N° Contrato</th>
						<th>Cliente</th>
						<th>Ejecutor</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Ej: Mantenimiento OCL</td>
						<td>Ej: MA0894564</td>
						<td>Ej: Ecopetrol</td>
						<td>Ej: Termotecnica</td>
					</tr>
					
				</tbody>
			</table>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="cell small-12 medium-12 large-3">
				<label>Nivel salarial: </label> <input type="text" name="" placeholder="ej: A1, A2, B3, I, II, ... etc">
			</div>
			<div class="cell small-12 medium-12 large-3">
				<label>Tipo de salario: </label>
				<select >
					<option value="Legal">Legal</option>
					<option value="Convencional">Convencional</option>
					<option value="Administrativo">Administrativo</option>
					<option value="Otros">Otros</option>
				</select>
			</div>
			<div class="cell small-12 medium-12 large-3">
				<label>Salario mensual: </label> <input type="number" name="" placeholder="">
			</div>
			<div>
				<br><input  type="submit" class="button" name="" value="Guardar">
			</div>
		</div>

		<button class="close-button" data-close aria-label="Close reveal" type="button">
    		<span aria-hidden="true">&times;</span>
  		</button>
		
	</section>
	
	<div class="callout">
		<table class="hover">
			<caption style="border:1px solid #333;"> Listado niveles salariales </caption>
			<thead>
				<tr>
					<th>Codigo interno</th>
					<th>Nivel Salarial</th>
					<th>Tipo</th>
					<th>Salario mensual</th>
					<th>Proyecto / Contrato</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>2</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					
				</tr
				><tr>
					<td>3</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>4</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>

	</div>	



		<legend class="col small-12 medium-12 large-12"><h4>Cargue de niveles salariales masivo</h4> </legend>
		<div><button class="button" data-open="personalModal">Cargue masivo</button></div>
	


</div>



