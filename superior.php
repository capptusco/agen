
<!--Inicio Superior-->
<div id="superior" class="col-md-12">
	<!--Inicio MenuSup-->
	<div id="menusup" class="col-md-12">
		<!--Inicio ROW-->
		<div id="row1" class="row">
			<!--Inicio Top1-->
			<div id="top1" class="col-md-10">
				<!--Inicio Perfil-->
				<div id="perfil" class="col-md-5 col-xs-12 col-sm-6">
					<ul class="nav navbar-nav">
					
						<li id= item_perfil class="active"><a href="#">MI PERFIL<span class="sr-only">(current)</span></a></li>
						<li id= item_perfil ><a href="#">MIS RESERVAS</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CARRITO DE COMPRAS <img src="img/btn_carrito.png" /> <span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						  </ul>
						</li>
					</ul>
				</div>
				<!--Fin Perfil-->
				<!--Inicio Social-->
				<div id="social" class="col-md-7 col-xlg-4 col-xlg-offset-2 col-xs-12 col-sm-6">
					<div class="col-md-6 col-sm-6 col-xs-6 colbuscar">
						<form class="navbar-form" role="search">
							<div class="">
								<input  id="buscador_menu_top" type="text" class="form-control" placeholder="" name="q">
								<i class="fa fa-search" aria-hidden="true"></i><a class="separadortop">|</a>
							</div>
						</form>
					</div>
					<div class="col-md-3 col-xs-3 col-sm-3 contactenos">
						<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contactenos</a>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3 colbotones">
						<a href="#"><img src="img/btn_chat_online.png" /></a>
					</div>
				</div>
				<!--Fin Social-->
			</div>
			<!--Fin Top1-->
		</div>
		<!--fin ROW1-->
		<!--Inicio ROW2-->
		<div id="row2" class="row">
			<!--Inicio Top2-->
			<div id="top2" class="col-md-10">
				<!--Inicio logos-->
				<div id="logos" class="col-md-3 col-sm-3">
					<img  class="img-responsive" src="./img/logo-home.png"/>
				</div>
				<!--Fin logos-->
				<!--Inicio menu-->
				<div id="menu" class="col-md-9 col-sm-9 col-xlg-5 col-xlg-offset-3">
					<nav class="navbar">
					  <div class="container-fluid  navbar-inverse">
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
					      </button>
					      <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
					    </div>
					    <div class="collapse navbar-collapse" id="myNavbar">
					      <ul class="nav navbar-nav">
					      	<li class="active"><a href="#">INICIO<span class="sr-only">(current)</span></a></li>
					      	<li><a href="#">ACERCA DE ECUADOR</a></li>
							<li><a href="#">ACERCA DEL EVENTO</a></li>
							<li><a href="#">AEREOS</a></li>
							<li><a href="#">TRASLADOS</a></li>
							<li><a href="#">HOTELES</a></li>
							<li><a href="#">TOURS</a></li>
							<li><a href="#">GALERIA</a></li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IDIOMA<span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="#">Español</a></li>
								<li><a href="#">English</a></li>
								<li><a href="#">Francais</a></li>
							  </ul>
							</li>
					      </ul>
					      
					    </div>
					  </div>
					</nav>
					
				</div>
				<!--Fin menu-->
			</div>
			<!--Fin Top2-->
		</div>
		<!--Fin ROW2-->
	</div>
	<!--Fin MenuSup-->
	<!--Inicio Slider-->
	<div id="slider" class="row">
		

		<!--Inicio stage-->
		<div id="slideshow">
			<ul id="exampleSlider">
			    <li>
			    	<?php if($page == "home"){?>
			    	<div class="descslide">
				    	<p class="underline">ECUADOR</p><h2>VOLCÁN CHIMBORAZO</h2>
				    	<p>El Chimborazo es el volcan y montaña mas alta de  eduador y el<br/>
				    	punto mas alejado del centro de la tierra, es decir el punto mas <br/>
				    	cercano al espacio exterior,razón por la cual es llamado como <br/>el punto más cercano al sol, debido a que el diametro terrestre</p>
				    </div>
				    <?php } ?>
				    <img src="img/rotadores/<?php echo $page;?>/1.png" alt="">
			    </li>
			    <li>
			    	<?php if($page == "home"){?>
			    	<div class="descslide">
				    	<p class="underline">ECUADOR</p><h2>PLAZA GRANDE</h2>
				    	<p>Ubicada en el centro historico de quito<br/>
				    	punto mas alejado del centro de la tierra, es decir el punto mas <br/>
				    	cercano al espacio exterior,razón por la cual es llamado como <br/>el punto más cercano al sol, debido a que el diametro terrestre</p>
				    </div>
				    <?php } ?>
		      		<img src="img/rotadores/<?php echo $page;?>/2.png" alt="">
		      	</li>
			</ul>

		</div>
		<!--Fin stage-->
		<?php if($page == "home"){?>
		<!--Inicio buscador-->
		<div id="buscador" class="col-md-10">
			<!--Inicio tipobusqueda-->
			<div id="tipobusqueda" class="row">
				 <ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#aereos"><i class="fa fa-plane" aria-hidden="true"></i><p>Boletos Aereos</p></a></li>
				    <li><a data-toggle="tab" href="#traslados"><i class="fa fa-car" aria-hidden="true"></i><p>Traslados</p></a></li>
				    <li><a data-toggle="tab" href="#hotelesbuscar"><i class="fa fa-building" aria-hidden="true"></i><p>Hoteles</p></a></li>
				    <li><a data-toggle="tab" href="#tours"><i class="fa fa-road" aria-hidden="true"></i><p>Tours</p></a></li>
				  </ul>
			</div>
			<!--Fin tipobusqueda-->

			<div class="tab-content">
			    <div id="aereos" class="tab-pane fade in active">
			    	<form>
				    	<!--Inicio tipoviaje-->
						<div id="tipoviaje" class="row">
							<div class="tipo">
								<input type="radio"/>Ida y Vuelta
							</div>
							<div class="tipo">
								<input type="radio"/>Solo Ida
							</div>
							<div class="tipo">
								<input type="radio"/>Multiples destinos
							</div>

						</div>
						<!--Fin tipoviaje-->
						<!--Inicio filtros-->
						<div id="filtrosaereos" class="col-md-9">
							<div class="col-md-12">
								<div class="salida col-md-2 col-xs-6 col-sm-6">
									<p>Salida<p>
									<input type="text"/>
								</div>
								<div class="destino col-md-2 col-xs-6 col-sm-6">
									<p>Destino<p>
									<input type="text"/>
								</div>
								<div class='input-group date fechasalida col-md-3 col-xs-12' id='datetimepicker6'>
									<p>Fecha Regreso<p>
									<input type='text' class="form-control" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
								<div class='input-group date fecharegreso col-md-3 col-xs-12' id='datetimepicker7'>
									<p>Fecha Regreso<p>
									<input  type='text' class="form-control" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="adultos col-md-1">
									<p>Adultos<p>
									<select class="form-control">
									  <option value="0">0</option>
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									</select>
								</div>
								<div class="ninos col-md-1">
									<p>Niños<p>
									<select class="form-control">
									  <option value="0">0</option>
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									</select>
								</div>
								<div class="clase col-md-2 col-md-offset-1">
									<p>Clase<p>
									<select class="form-control">
									  <option value="eco">Economica</option>
									  <option value="eje">Ejecutiva</option>
									</select>
								</div>
								
							</div>
						</div>
						<!--Fin filtros-->
						<!--Inicio botonbuscar-->
						<div id="buscaraereos" class="col-md-3">
							<input type="Submit" value="Buscar" class="btn btn-success" />
						</div>
						<!--Fin botonbuscar-->
					</form>
			    </div>
			    <div id="traslados" class="tab-pane fade">
			    	<form>
				    	<!--Inicio tipoviaje-->
						<div id="tiposervicio" class="row">
							<div class="col-md-2 col-xs-6 col-sm-6">
								<p>Tipo de servicio<p>
								<input type="text"/>
							</div>
							<div class="tiposerv col-md-3 col-xs-6 col-sm-6">
								
								<div class="radioserv">
									<input type="radio"/>Solo Ida
								</div>
								<div class="radioserv">
									<input type="radio"/>Ida y Vuelta
								</div>
							</div>
						</div>
						<!--Fin tipoviaje-->
						<!--Inicio filtros-->
						<div id="filtrosservicio" class="col-md-9">
							<div class="combo col-md-1">
										<p>Desde<p>
										<select class="form-control">
										  <option value="d1">Desde 1</option>
										  <option value="d2">Desde 2</option>
										</select>
							</div>
							<div class="combo col-md-1">
										<p>Zona<p>
										<select class="form-control">
										  <option value="z1">Zona 1</option>
										  <option value="z2">Zona 2</option>
										</select>
							</div>
							<div class="combo col-md-1">
										<p>Desde<p>
										<select class="form-control">
										  <option value="d1">Desde 1</option>
										  <option value="d2">Desde 2</option>
										</select>
							</div>
							<div class="combo col-md-1">
										<p>Zona<p>
										<select class="form-control">
										  <option value="z1">Zona 1</option>
										  <option value="z2">Zona 2</option>
										</select>
							</div>
							<div class='input-group date fechaon col-md-2 col-xs-12' id='datetimepicker8'>
										<p>Fecha<p>
										<input type='text' class="form-control" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
							</div>
							<div class='input-group date fechaon col-md-2 col-xs-12' id='datetimepicker3'>
										<p>Hora<p>
										<input type='text' class="form-control" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-time"></span>
										</span>
							</div>
							<div class="adultos col-md-1">
										<p>Adultos<p>
										<select class="form-control">
										  <option value="0">0</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										</select>
									</div>
									<div class="ninos col-md-1">
										<p>Niños<p>
										<select class="form-control">
										  <option value="0">0</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										</select>
									</div>
								</div>
								<!--Fin filtros-->
								<!--Inicio botonbuscar-->
								<div id="buscaraereos" class="col-md-3">
									<input type="Submit" value="Buscar" class="btn btn-success" />
								</div>
								<!--Fin botonbuscar-->
						</form>
			    </div>
				<div id="hotelesbuscar" class="tab-pane fade">
					<form>
					<!--Inicio filtros-->
					<div id="filtroshoteles" class="col-md-9">
						
							<div class="col-md-12 filas">
								<div class="destino col-md-2 col-xs-6 col-sm-6">
										<p>Destino<p>
										<input type="text"/>
								</div>
								<div class='input-group date fechasalida col-md-3 col-xs-12' id='datetimepicker9'>
											<p>Fecha Ingreso<p>
											<input type='text' class="form-control" />
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
								</div>
								<div class='input-group date fechasalida col-md-3 col-xs-12' id='datetimepicker10'>
											<p>Fecha Salida<p>
											<input type='text' class="form-control" />
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
								</div>
							</div>
							<div class="col-md-12 filas">
								<div class="combo col-md-2">
										<p>Habitación<p>
										<select class="form-control">
										  <option value="0">0</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										</select>
									</div>
								<div class="combo col-md-2">
										<p>Adultos<p>
										<select class="form-control">
										  <option value="0">0</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										</select>
									</div>
									<div class="combo col-md-2">
										<p>Niños<p>
										<select class="form-control">
										  <option value="0">0</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										</select>
									</div>
									<!--Inicio botonbuscar-->
								<div id="buscaraereos" class="col-md-3">
									<input type="Submit" value="Buscar" class="btn btn-success" />
								</div>
								<!--Fin botonbuscar-->
							</div>
						
					</div>
					<!--Fin filtros-->
					</form>
			    </div>
				<div id="tours" class="tab-pane fade">
					<!--Inicio filtros-->
					<div id="filtrostours" class="col-md-9">
						<div class="col-md-12">
								<div class="combo col-md-2">
										<p>Destino<p>
										<select class="form-control">
										  <option value="q">Quito, Ecuador</option>
										  <option value="a">Amazonas</option>
										  <option value="c">Costa</option>
										  <option value="p">Cotopaxi</option>
										</select>
									</div>
								<div class='input-group date fechaon col-md-3 col-xs-12' id='datetimepicker11'>
									<p>Fecha de inicio<p>
									<input type='text' class="form-control" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
								<div class="combo col-md-2">
										<p>Duración del tour<p>
										<select class="form-control">
										  <option value="1">1 Dia</option>
										  <option value="2">2 Dias</option>
										  <option value="3">3 Dias</option>
										  <option value="4">4 Dias</option>
										</select>
									</div>
							</div>
							<div class="col-md-12">
								<div class="combo col-md-2">
										<p>Adultos<p>
										<select class="form-control">
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										</select>
									</div>
								<div class="combo col-md-2">
										<p>Niños<p>
										<select class="form-control">
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										</select>
									</div>

									<!--Inicio botonbuscar-->
								<div id="buscaraereos" class="col-md-3">
									<input type="Submit" value="Buscar" class="btn btn-success" />
								</div>
								<!--Fin botonbuscar-->
								
							</div>
					</div>
					<!--Fin filtros-->
					<!--Inicio botonbuscar-->
					<div id="buscartours" class="col-md-3">
						
					</div>
					<!--Fin botonbuscar-->
			    </div>
		  	</div>
		</div>
		<!--Fin buscador-->
		<?php }?>
		
	</div>
	<!--Fin Slider-->
</div>
<!--Fin Superior-->