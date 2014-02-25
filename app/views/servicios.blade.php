@extends('layout')

@section('title')
Servicios | Hotel Quetzalcalli | Teotihuacán, México
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><p class="glyphicon glyphicon-list"></p> Servicios adicionales que podrás disfrutar durante tu estancia</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Internet inalámbrico</h3>
					<p>Internet inalámbrico en todas las habitaciones.</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/internet.svg', 'Internet', array('class' => 'services')) }}
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Estacionamiento</h3>
					<p>Amplio estacionamiento.</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/parking.svg', 'Estacionamiento', array('class' => 'services')) }}
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Áreas verdes</h3>
					<p>Confortables áreas verdes.</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/verde.svg', 'Áreas verdes', array('class' => 'services')) }}
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Cafetería</h3>
					<p>Servicio de cafetería.</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/cafe.svg', 'Cafetería', array('class' => 'services')) }}
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Lavandería</h3>
					<p>Servicio de lavandería.</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/lavar.svg', 'Lavandería', array('class' => 'services')) }}
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Eventos</h3>
					<p>Jardín para eventos sociales.</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/eventos.svg', 'Eventos', array('class' => 'services')) }}
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Temazcal</h3>
					<p>Temazcal.</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/temazcal.svg', 'Temazcal', array('class' => 'services')) }}
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Taxi</h3>
					<p>Servicio de taxi.</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/taxi.svg', 'Taxi', array('class' => 'services')) }}
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Sala de juntas</h3>
					<p>Sala de juntas.</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/juntas.svg', 'Sala de juntas', array('class' => 'services')) }}
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Visitas guiadas</h3>
					<p>Teotihuacan cuenta con una gran riqueza cultural, pero además de visitar la Piramide del Sol y de la Luna, {{ HTML::link('/', 'conoce más') }} lugares de la región. Estamos seguros de que te encantarán.</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/visitas.svg', 'Visitas guiadas', array('class' => 'services')) }}
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Masajes y terapias alternativas</h3>
					<p>Masajes y terapias alternativas.</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/masajes.svg', 'Masajes', array('class' => 'services')) }}
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<h3>Descuentos</h3>
					<p>Descuentos para el parque "Reino Animal" y "Vuelos en Globos Aerostáticos".</p>
				</div>
				<div class="col-md-4">
					{{ HTML::image('img/descuento.svg', 'Descuentos', array('class' => 'services')) }}
				</div>
			</div>
		</div>
	</div>

</div>
@stop

@section('js')
<script>
  $('#servicios').addClass('active');
</script>
@stop
