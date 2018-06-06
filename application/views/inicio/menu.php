<ul class="vertical menu accordion-menu" data-accordion-menu>
	<li class="menu-text">
		<img src="<?= base_url('assets/img/termotecnica.png') ?>" width="100">
		</li>
    <li>
        
       <a href="#">Proyectos</a>

       <ul class="menu vertical nested">
            <li><a href="<?= site_url('proyectos/proyecto') ?>">Proyectos</a></li>
            
        </ul>
    </li>
    <li>
    	<!-- personal -->
       <a href="#"> <i class="fas fa-user"></i> &nbsp; Personal</a>

       <ul class="menu vertical nested">
            <li><a href="<?= site_url('persona/tabla_salarial') ?>">Tablas salariales</a></li>
        	<li><a href="<?= site_url('persona/salarios') ?>">Niveles salariales</a></li>
        	<li><a href="<?= site_url('persona/nomina') ?>">Nominas por año</a></li>
        	<li><a href="<?= site_url('persona/cargos') ?>">Cargos de personal</a></li>
            <li><a href="<?= site_url('persona/itempersonal') ?>">Item de personal</a></li>
        </ul>
    </li>
    <li>
        <a href="#">Equipos</a>
        <ul class="menu vertical nested">
            <li><a href="<?= site_url('equipo/equipos') ?>">Equipos</a></li>
            <li><a href="<?= site_url('equipo/itemequipos') ?>">Item de equipos</a></li>
        </ul>
    </li>
    <li><a href="#">Material</a>
        <ul class="menu vertical nested">
            <li><a href="<?= site_url('materiales/itemmaterial') ?>">Item de material</a></li>            
        </ul>
    </li>



    <li><a href="#">Items varios</a></li>
    <li>
        
        <a href="#">Actividades</a>
        <ul class="menu vertical nested">
            <li><a href="<?= site_url('Actividad/add') ?>">Item de Actividad</a></li>
            
        </ul>



    </li>
</ul>