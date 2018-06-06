<div class="callout">
			<div class="grid-x grid-padding-x">
				<legend class="col small-12 medium-12 large-12"><h4>Nivel salarial</h4></legend> 
				<div class="cell large-4">
					<button class="button" data-open="form_tablas_salariales">Tablas salariales</button> &nbsp;
					<button class="button" data-open="form_agregar_salario"><i class="fas fa-plus"></i></button>
				</div>
				<table>
				<thead>
					<tr>
						<th>Proyecto</th>
						<th>N° Contrato</th>
						<th>Cliente</th>
						<th>Ejecutor</th>
						<th>Viegencia</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Ej: Mantenimiento OCL</td>
						<td>Ej: MA0894564</td>
						<td>Ej: Ecopetrol</td>
						<td>Ej: Termotecnica</td>
						<td>Ej: </td>
					</tr>
					
				</tbody>
			</table>
			</div>
		


		<table class="hover">
			<caption style="border:1px solid #333;"> Listado niveles salariales </caption>
			<thead>
				<tr>
					<th>Codigo interno</th>
					<th>Nivel Salarial</th>
					<th>Tipo</th>
					<th>Salario mensual</th>
					<th>Modificar</th>
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
		


<section class="reveal large" id="form_tablas_salariales" data-reveal>
<br>
	<div class="callout">
				<div class="grid-x grid-padding-x">
					<legend class="col small-12 medium-12 large-12"><h4>Tablas salariales</h4> </legend>
					<table>
					<thead>
						<tr>
							<th>N°</th>
							<th>Proyecto</th>
							<th>N° Contrato</th>
							<th>Cliente</th>
							<th>Ejecutor</th>
							<th>Vigencia</th>
							<th><i class="far fa-check-square"></i></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>01</td>
							<td>Ej: Mantenimiento OCL</td>
							<td>Ej: MA0894564</td>
							<td>Ej: Ecopetrol</td>
							<td>Ej: Termotecnica</td>
							<td>Ej: Primer semestre 2018</td>
							<td><input type="radio" name="" value=""></td>
						</tr>
						<tr>
							<td>02</td>
							<td>Ej: Mantenimiento OCL</td>
							<td>Ej: MA0894564</td>
							<td>Ej: Ecopetrol</td>
							<td>Ej: Termotecnica</td>
							<td>Ej: Primer semestre 2018</td>
							<td><input type="radio" name="" value=""></td>
						</tr>
						<tr>
							<td>03</td>
							<td>Ej: Mantenimiento OCL</td>
							<td>Ej: MA0894564</td>
							<td>Ej: Ecopetrol</td>
							<td>Ej: Termotecnica</td>
							<td>Ej: Primer semestre 2018</td>
							<td><input type="radio" name="" value=""></td>
						</tr>
						<tr>
							<td>04</td>
							<td>Ej: Mantenimiento OCL</td>
							<td>Ej: MA0894564</td>
							<td>Ej: Ecopetrol</td>
							<td>Ej: Termotecnica</td>
							<td>Ej: Primer semestre 2018</td>
							<td><input type="radio" name="" value=""></td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="clearfix " ><button class="button float-right">Cargar tabla salarial</button> </div>

			</div>

			<button class="close-button" data-close aria-label="Close reveal" type="button">
    		<span aria-hidden="true">&times;</span>
    	</button>

</section>



<div>
	<section class="reveal large" id="form_agregar_salario" data-reveal>

		<br>
		<div class="callout">
			<div class="grid-x grid-padding-x">
				<legend class="col small-12 medium-12 large-12"><h4>Formulario nivel salarial</h4> </legend>
				<div ><button class="button">Guardar tabla salarial</button> </div>
				
				<table>
				<thead>
					<tr>
						<th>Proyecto</th>
						<th>N° Contrato</th>
						<th>Cliente</th>
						<th>Ejecutor</th>
						<th>Viegencia</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="" placeholder="ej: Yuma,... etc"></td>
						<td><input type="text" name="" placeholder="ej: MA0894564,... etc"></td>
						<td><input type="text" name="" placeholder="ej: Ecopetrol,... etc"></td>
						<td><input type="text" name="" placeholder="ej: Termotecnica,... etc"></td>
						<td><input type="text" name="" placeholder="ej: Primer semestre 2018,... etc"></td>
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
				<br><input  type="submit" class="button" name="" value="Adicionar">
				<input  type="submit" class="button" name="" value="Cargue masivo">
			</div>
		</div>	

			<div class="callout">
			<legend class="col small-12 medium-12 large-12"><h4>Listado nivel salarial</h4> </legend>

			<table class="hover">
			<thead>
				<tr>
					<th>Codigo interno</th>
					<th>Nivel Salarial</th>
					<th>Tipo</th>
					<th>Salario mensual</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>001</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>002</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					
				</tr
				><tr>
					<td>003</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>004</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>005</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>006</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>007</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>	


		</div>




		<button class="close-button" data-close aria-label="Close reveal" type="button">
    		<span aria-hidden="true">&times;</span>
  		</button>
		
	</section>
	
	


			


</div>

	
