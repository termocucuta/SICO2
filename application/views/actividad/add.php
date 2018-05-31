<section>
	<div class="callout">
		<div class="grid-x grid-padding-x">
			<legend class="cell"><h4>Formulario de actividad (APU)</h4></legend>

			<div class="cell medium-6 large-3">
				<label>Nombre de la actividad:</label>
				<input type="text" name="" placeholder="ej: excavación, demolición ... etc">
			</div>

			<div class="cell small-12 medium-6 large-3">
				<label>Refrencia de grupo:</label>
				<input type="text" name="" placeholder="ej: excavación, demolición ... etc">
			</div>

			<div class="cell small-12 medium-6 large-3">
				<label>Tipo de actividad:</label>
				<select>
					<option>Excavación</option>
					<option>Demolición</option>
					<option>Instalación</option>
				</select>
			</div>

		</div>
	</div>

	<div class="card callout">
		<div><button class="button" data-open="personalModal">Agregar personal</button></div>
		<table>
			<caption style="border:1px solid #333;"> Listado de personal </caption>
			<thead>
				<tr>
					<th>Item</th>
					<th>Cargo</th>
					<th>Valor</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>2</td>
					<td></td>
					<td></td>
				</tr
				><tr>
					<td>3</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>4</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>



	<div class="card callout">
		<div><button class="button">Agregar Equipos</button></div>
		<table>
			<caption style="border:1px solid #333;"> Listado de equipos </caption>
			<thead>
				<tr>
					<th>Item</th>
					<th>Cargo</th>
					<th>Valor</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>


	<div class="card callout">
		<div><button class="button">Agregar materiales</button></div>
		<table>
			<caption style="border:1px solid #333;"> Listado de materiales</caption>
			<thead>
				<tr>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>

</section>


<div id="personalModal" class="reveal large" data-reveal>
	Aqui se busca el APU de personal para añadirlo a la actividad.
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>