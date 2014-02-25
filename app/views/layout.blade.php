<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> @section('title') 
		Hotel Quetzalcalli | Teotihuacán, México
	@show</title>

	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap-responsive.min.css') }}
	{{ HTML::style('css/layout.css') }}
	@section('css')
	@show
</head>
<body>

	<!-- Header -->
	<div class="greca">
	</div>

	<div class="container">

		<div class="row">
			<div class="col-md-3">
				<a href="{{ URL::to('/') }}">
	        		{{ HTML::image('img/quetzalcalli.svg', 'Hotel Quetzalcalli', array('class' => 'img-responsive', 'title' => 'Hotel Quetzalcalli', 'width' => '200')) }}
	        	</a>
			</div>
		</div>
		<!-- Fin header -->
	</div>

	<!-- Menu -->
		<div class="navbar navbar-inverse">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      </div>
	        <div class="navbar-collapse collapse navbar-inverse-collapse">
	          <ul class="nav navbar-nav">
	            <li id="inicio">{{ HTML::link('/', 'Inicio') }}</li>
	            <li id="reservaciones">{{ HTML::link('/reservaciones-en-linea', 'Reservaciones') }}</li>
	          	<li id="ubicacion">{{ HTML::link('/ubicacion-como-llegar', 'Ubicación') }}</li>
	            <li id="servicios">{{ HTML::link('/servicios-durante-estancia', 'Servicios') }}</li>
	            <li>{{ HTML::link('/', 'Eventos') }}</li>
	            <li>{{ HTML::link('/', 'Sitios de interes') }}</li>
	            <li>{{ HTML::link('/', 'Habitaciones') }}</li>
	            <li>{{ HTML::link('/', 'Temazcal') }}</li>
	            <li>{{ HTML::link('/', 'Galeria') }}</li>
	            <li>{{ HTML::link('#', 'Contacto', array('data-toggle' => 'modal', 'data-target' => '.bs-example-modal-sm')) }}</li>
	          </ul>
	        </div><!-- /.nav-collapse -->
	      </div>
		<!-- Fin menu -->

	@section('content')
	@show

	<!-- Modal contact -->
	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	          <h4 class="modal-title" id="mySmallModalLabel"><span class="glyphicon glyphicon-envelope"></span> Ponte en <strong>contacto</strong> con nosotros</h4>
	      </div>
	      <div class="modal-body">
	        <ul class="list-group">
	          <li class="list-group-item"><span class="glyphicon glyphicon-home"></span> Calle Constitución No.8 San Sebastián Xolalpa, <strong>Teotihuacan</strong>, Estado de México</li>
			  <li class="list-group-item"><span class="glyphicon glyphicon-phone"></span> 01-594-10-16-037</li>
			  <li class="list-group-item"><span class="glyphicon glyphicon-envelope"></span> info@hotelquetzalcalli.com</li>
			</ul>

			<!-- Form contact -->
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="form-horizontal">
						<fieldset>
							<legend>Contacto</legend>

							<div class="form-group">
								<label for="nombre" class="col-md-4 control-label"><span class="glyphicon glyphicon-asterisk"></span> Nombre</label>
								<div class="col-md-8">
									<input type="text" id="nombre" placeholder="Nombre" class="form-control input-sm">
								</div>
							</div>

							<div class="form-group">
								<label for="direccion" class="col-md-4 control-label">Dirección</label>
								<div class="col-md-8">
									<input type="text" id="direccion" placeholder="Dirección" class="form-control input-sm">
								</div>
							</div>

							<div class="form-group">
								<label for="ciudad" class="col-md-4 control-label"><span class="glyphicon glyphicon-asterisk"></span> Ciudad</label>
								<div class="col-md-8">
									<input type="text" id="ciudad" placeholder="Ciudad" class="form-control input-sm">
								</div>
							</div>

							<div class="form-group">
								<label for="pais" class="col-md-4 control-label"><span class="glyphicon glyphicon-asterisk"></span> País</label>
								<div class="col-md-8">
									<input type="text" id="pais" placeholder="País" class="form-control input-sm">
								</div>
							</div>

							<div class="form-group">
								<label for="movil" class="col-md-4 control-label"><span class="glyphicon glyphicon-asterisk"></span> Teléfono móvil</label>
								<div class="col-md-8">
									<div class="input-group">
					                   <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
					                   <input type="text" id="movil" placeholder="Móvil" class="form-control input-sm">
					                </div>
								</div>
							</div>

							<div class="form-group">
								<label for="fijo" class="col-md-4 control-label">Teléfono fijo</label>
								<div class="col-md-8">
									<div class="input-group">
					                   <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
					                   <input type="text" id="fijo" placeholder="Teléfono fijo" class="form-control input-sm">
					                </div>
								</div>
							</div>

							<div class="form-group">
								<label for="email" class="col-md-4 control-label"><span class="glyphicon glyphicon-asterisk"></span> E-mail</label>
								<div class="col-md-8">
									<div class="input-group">
					                   <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
					                   <input type="text" id="email" placeholder="E-mail" class="form-control input-sm">
					                </div>
								</div>
							</div>

							<div class="form-group">
								<label for="comentario" class="col-md-4 control-label"><span class="glyphicon glyphicon-asterisk"></span> Comentarios</label>
								<div class="col-md-8">
									<textarea id="comentario" rows="4" placeholder="Comentarios" class="form-control input-sm"></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-8 col-md-offset-4">
									<button class="btn-danger btn-sm">Cancelar</button>
									<button class="btn-success btn-sm">Enviar</button>
								</div>
							</div>

						</fieldset>
					</div>
				</div>
			</div>
			<!-- End form contac -->
          </div>
	    </div>
	  </div>
	</div>
	<!-- End modal contact -->

	<!-- FOOTER -->
	<footer>
		<div class="container">
			<div class="container-marketing">
			<div class="row">
				<div class="col-md-12">
					<h2>Experiencias en Hotel Quetzalcalli</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<blockquote>
					{{ HTML::image('img/mujer.jpg', 'Experiencias Hotel Quetzalcalli', array('class' => 'img-circle', 'width' => '50')) }}
		              <p>"La ubicación está a 10 minutos a pie de la zona arqueológica de <strong>Teotihuacán</strong>, el personal es muy amable y servicial"</p>
		              <small><cite title="Source Title">Liudmila, St. Petesbourg, RU.</cite></small>
		            </blockquote>
				</div>
				<div class="col-md-4">
					<blockquote>
					{{ HTML::image('img/hombre.jpg', 'Experiencias Hotel Quetzalcalli', array('class' => 'img-circle', 'width' => '50')) }}
		              <p>"Muy limpio. El personal muy atento, <strong>Teotihuacán</strong> esta a sólo 15 minutos a pie del hotel, la mejor opción"</p>
		              <small><cite title="Source Title">Alexander, Moscow, RU.</cite></small>
		            </blockquote>
				</div>
				<div class="col-md-4">
					<blockquote>
					{{ HTML::image('img/mujer.jpg', 'Experiencias Hotel Quetzalcalli', array('class' => 'img-circle', 'width' => '50')) }}
		              <p>"La gentilesa del personal"</p>
		              <small><cite title="Source Title">Lilliane, Mont-Tremblant, CA.</cite></small>
		            </blockquote>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="https://www.facebook.com/hotelquetzalcalli" target="_blank">
					{{ HTML::image('img/facebook.png', 'Facebook Hotel Quetzalcalli', array('class' => 'img-responsive img-circle', 'width' => '30', 'title' => 'Facebook Hotel Quetzalcalli')) }}
					</a>
				</div>
			</div>
		</div>
		<br><br>
    	<p>
    		©<script>document.write(new Date().getFullYear());</script>
    		<strong>Hotel Quetzalcalli</strong>. Constitución No. 8 San Sebastián Xolalpa, <strong>Teotihuacan</strong>, Estado de México.  01-594-10-16-037
    	</p>
		</div>
  	</footer>
  	<!-- Fin FOOTER -->

	<!-- JS -->
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	@section('js')
	@show
	<!-- Fin JS -->
</body>
</html>