<form>
	<div class="callout">
		<div class="grid-x grid-padding-x">
			<legend class="col small-12 medium-12 large-12"><h4>Formulario equipos</h4> </legend>
			<div class="cell small-1 medium-1 large-1"><button class="button" data-open="personalModal">Adicionar</button></div>
			<div class="cell small-1 medium-1 large-1"><button class="button" data-open="personalModal">Modificar</button></div>
		</div>
	
		<div class="grid-x grid-padding-x">
			<div class="cell small-3 medium-3 large-1"><label>Codigo equipos: </label> <input type="number" name=""></div>
			<div class="cell small-6 medium-6 large-3"><label>Descripción equipo: </label> <input type="text" name=""></div>
			<div class="cell small-3 medium-3 large-1"><label>Tipo: </label> 
				<select >
				<option value="Propio">Propio</option>
				<option value="Alquilado">Alquilado</option>
				<option value="Otros">Otros</option>
				</select></div>	
			<div class="cell small-3 medium-3 large-1"><label>Unidad de medida: </label><input type="text" name=""></div>
			<div class="cell small-3 medium-3 large-2"><label>Valor equipo operativo: </label> <input type="number" name=""></div>
			<div class="cell small-3 medium-3 large-2"><label>Valor equipo disponible: </label> <input type="number" name=""></div>
		</div>	
		<div class="grid-x grid-padding-x">
			
			<div class="cell small-3 medium-3 large-3"><label>Referencia propietario: </label> <input type="text" name=""></div>
			
		</div>
	
	</div>
	<legend class="col small-12 medium-12 large-12"><h4>Cargue masivo de equipos</h4> </legend>		
	<div><button class="button" data-open="personalModal">Cargue masivo</button></div>

</form>