<div class="callout">
	<div class="grid-x grid-padding-x">
		<legend class="col small-12 medium-12 large-12"><h4>Ítem de equipos</h4> </legend>
		
		<div> <button class="button" data-open="form_proyectos">Proyecto</button> &nbsp;
		<button class="button" data-open="form_item_equipos"><i class="fas fa-plus"></i></button> 

			

	</div>

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


	<table class="hover">
		<caption style="border:1px solid #333;"> Listado ítem de equipos </caption>
		<thead>
			<tr>
				<th>N°</th>
				<th>Ítem equipo</th>
				<th>Descripción</th>
				<th>Unidad</th>
				<th>Tarifa (Direct)</th>
				<th>Modificar</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>3.1.2</td>
				<td>Bomba De Autocebante De Flujo Inducido</td>
				<td>Día</td>
				<td>$ 322,224</td>
				<td></td>
			</tr>
			<tr>
				<td>2</td>
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
			</tr>
			<tr>
				<td>4</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>




	<section class="reveal large" id="form_proyectos" data-reveal>
	<br>
		<div class="callout">
			<div class="grid-x grid-padding-x">
				<legend class="col small-12 medium-12 large-12"><h4>Seleccionar proyecto </h4> </legend>
					<table>
					<thead>
						<tr>
							<th>N°</th>
							<th>Proyecto</th>
							<th>N° Contrato</th>
							<th>Cliente</th>
							<th>Ejecutor</th>
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
							<td><input type="radio" name="" value=""></td>
						</tr>
						<tr>
							<td>02</td>
							<td>Ej:</td>
							<td>Ej:</td>
							<td>Ej:</td>
							<td>Ej:</td>
							<td><input type="radio" name="" value=""></td>
						</tr>
						<tr>
							<td>03</td>
							<td>Ej:</td>
							<td>Ej:</td>
							<td>Ej:</td>
							<td>Ej:</td>
							<td><input type="radio" name="" value=""></td>
						</tr>
						<tr>
							<td>04</td>
							<td>Ej:</td>
							<td>Ej:</td>
							<td>Ej:</td>
							<td>Ej:</td>
							<td><input type="radio" name="" value=""></td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="clearfix " ><button class="button float-right">Cargar proyecto</button> </div>

			</div>

			<button class="close-button" data-close aria-label="Close reveal" type="button">
    		<span aria-hidden="true">&times;</span>
    	</button>

	</section>






	<section class="reveal large" id="form_item_equipos" data-reveal>
	<br>
	<div class="callout">
				<div class="grid-x grid-padding-x">
					<legend class="col small-12 medium-12 large-12"><h4>Formulario ítem de equipos</h4> </legend></div>
					<div ><button class="button">Guardar ítem</button> </div>



		<div class="grid-x grid-padding-x">
			<div class="cell small-3 medium-3 large-2"><label>Ítem equipo: </label><input type="text" name=""></div>
			<div class="cell small-3 medium-5 large-9"><label>Descripción ítem: </label> <input type="text" name=""></div>
			<div class="cell small-3 medium-3 large-1"><label>Unidad: </label><input type="text" name=""></div>
		</div>	

		<div class="grid-x grid-padding-x">	
			<div class="cell small-3 medium-3 large-2"><label>Codigo interno: </label> 
					<select >
					<option value=""></option>
					<option value=""></option>
				</select></div>
			<div class="cell small-3 medium-3 large-4"><label>Descripción equipo: </label><input type="text" name=""></div>
			<div class="cell small-3 medium-3 large-2"><label>Equipo operativo: </label><input type="text" name=""></div>
			<div class="cell small-3 medium-3 large-2"><label>Combustible: </label> <input type="text" name=""></div>
			<div class="cell small-3 medium-3 large-2"><label>Peajes: </label> <input type="text" name=""></div>
		</div>	
			
		<div class="grid-x grid-padding-x">
			<div class="cell small-3 medium-3 large-2"><label>Movilización: </label> <input type="text" name=""></div>
			<div class="cell small-3 medium-3 large-2"><label>Desmovilización: </label> <input type="text" name=""></div>
			<div class="cell small-3 medium-3 large-2"><label>Codigo operador: </label> 
					<select >
					<option value=""></option>
					<option value=""></option>
				</select></div>
			<div class="cell small-3 medium-3 large-3"><label>Descripción operador: </label> <input type="text" name=""></div>
			<div class="cell small-3 medium-3 large-3"><label>Costo día operador: </label> <input type="text" name=""></div>
			<div><h5>Total costo día equipo directo: $...</h5></div>
			
		</div>
	</div>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
    		<span aria-hidden="true">&times;</span>
 		   	</button>
	</section>

	</div>		
</div>	

	<legend class="col small-12 medium-12 large-12"><h4>Importar ítem de equipos</h4> </legend>		
	<div><button class="button" data-open="personalModal">Plantilla</button> &nbsp;
		<button class="button" data-open="personalModal">Importar</button> &nbsp;

		<button class="button" type="button" data-toggle="example-dropdown4">Exportar</button>
    	<div class="dropdown-pane right" id="example-dropdown4" data-dropdown>
      	<button class="button" data-open="personalModal">Plantilla</button> &nbsp;
      	<button class="button" data-open="personalModal">Plantilla</button> &nbsp;
    </div>
  </div>
		