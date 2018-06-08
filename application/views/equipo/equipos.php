
	<div class="callout">
		<div class="grid-x grid-padding-x">
			<legend class="col small-12 medium-12 large-12"><h4>Listado bases de datos equipos</h4> </legend>
			<div> <button class="button" data-open="form_filtro_lista_equipos">Listar</button> &nbsp;
			<button class="button" data-open="form_equipos"><i class="fas fa-plus"></i></button></div>
		</div>
	
	<section class="reveal large" id="form_filtro_lista_equipos" data-reveal> 	
	<br>
	<div class="callout">		
		<div class="grid-x grid-padding-x">
			<legend class="col small-12 medium-12 large-12"><h4>Filtro listar base de datos equipos</h4> </legend>
		</div>	
	</div>		
		<button class="close-button" data-close aria-label="Close reveal" type="button">
    		<span aria-hidden="true">&times;</span>
    	</button>	

	</section>
	


	<section class="reveal large" id="form_equipos" data-reveal> 	
	<br>
	<div class="callout">	
		<div class="grid-x grid-padding-x">
			<legend class="col small-12 medium-12 large-12"><h4>Formulario equipos</h4> </legend>
			<div ><button class="button">Guardar equipo</button> </div>
		</div>		

		<div class="grid-x grid-padding-x">	
			<div class="cell small-3 medium-3 large-2"><label>Codigo equipos: </label> <input type="number" name=""></div>
			<div class="cell small-6 medium-6 large-5"><label>Descripción equipo: </label> <input type="text" name=""></div>
			<div class="cell small-3 medium-3 large-2"><label>Tipo: </label> 
				<select >
				<option value="Propio">Propio</option>
				<option value="Alquilado">Alquilado</option>
				<option value="Otros">Otros</option>
				</select></div>	
			<div class="cell small-3 medium-3 large-2"><label>Unidad de medida: </label><input type="text" name=""></div>
		</div>
				
		<div class="grid-x grid-padding-x">	
			<div class="cell small-3 medium-3 large-2"><label>Valor equipo operativo: </label> <input type="number" name=""></div>
			<div class="cell small-3 medium-3 large-2"><label>Valor equipo disponible: </label> <input type="number" name=""></div>
			<div class="cell small-3 medium-3 large-3"><label>Referencia propietario: </label> <input type="text" name=""></div>
		</div>
	</div>

		<button class="close-button" data-close aria-label="Close reveal" type="button">
    		<span aria-hidden="true">&times;</span>
    	</button>
	
	</section>

	<table class="hover">
	 	<caption style="border:1px solid #333;"> Listado de equipos </caption>
				<thead>
					<tr>
						<th>N°</th>
						<th>Código interno</th>
						<th>Descripción</th>
						<th>Tipo</th>
						<th>Unidad</th>
						<th>Costo operativo</th>
						<th>Costo disponible</th>
						<th>Ref. Propietario</th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>210105</td>
						<td>Bomba De Autocebante De Flujo Inducido</td>
						<td>Propio</td>
						<td>Día</td>
						<td>$ 322,224</td>
						<td>$ 80,000</td>
						<td>Termotecnica</td>
					</tr>
					<tr>
						<td>2</td>
						<td></td>
						<td></td>
						<td></td>
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
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
		</table>
	</div>	



	<legend class="col small-12 medium-12 large-12"><h4>Cargue masivo de equipos</h4> </legend>		
	<div><button class="button" data-open="personalModal">Plantilla</button> &nbsp;
	<button class="button" data-open="personalModal">Cargue masivo</button></div>