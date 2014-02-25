@extends('layout')

@section('content')
<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <!-- <div class="item active">
      {{ HTML::image('img/quetzalcalli.svg', 'Hotel Quetzalcalli - Teotihuacán') }}
    </div> -->
    <div class="item active">
      {{ HTML::image('img/slide1.png', 'Hotel Quetzalcalli - Teotihuacán') }}
      <div class="container">
        <div class="carousel-caption">
          <h1>
            Hotel Quetzalcalli | Teotihuacán, México</h1>
        </div>
      </div>
    </div>
    <div class="item">
      {{ HTML::image('img/slide2.jpg', 'Hotel Quetzalcalli - Teotihuacán') }}
    </div>
    <div class="item">
      {{ HTML::image('img/slide3.jpg', 'Hotel Quetzalcalli - Teotihuacán') }}
   	</div>
   	<div class="item">
      {{ HTML::image('img/slide4.jpg', 'Hotel Quetzalcalli - Teotihuacán') }}
   	</div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<!-- End Carousel -->

<!-- Services -->
	<div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
        	<div class="well services-init">
        		<h2>Servicios</h2>
        		{{ HTML::image('img/servicios.svg', 'Servicios - Hotel Quetzalcalli', array('class' => 'services')) }}
        		<p>Disfruta de la mejor manera tu estancia en <strong>Hotel Quetzalcalli</strong>, contamos con una extensa variedad de {{ HTML::link('/servicios-durante-estancia', 'servicios') }} para ti.</p>
        	</div>
        </div>
        <div class="col-lg-4">
        	<div class="well services-init">
        		<h2>Ubicación</h2>
        		{{ HTML::image('img/mapa.svg', 'Ubicación - Hotel Quetzalcalli', array('class' => 'services')) }}
        		<p>{{ HTML::link('/ubicacion-como-llegar', 'Encuéntranos') }} y llega de una forma fácil, además te indicamos las <strong>mejores rutas</strong> para llegar.</p>
        	</div>
        </div>
        <div class="col-lg-4">
        	<div class="well services-init">
        		<h2>Reservaciones</h2>
        		{{ HTML::image('img/reservacion.svg', 'Reservaciones - Hotel Quetzalcalli', array('class' => 'services')) }}
        		<p>Puedes {{ HTML::link('/reservaciones-en-linea', 'reservar') }} ahora mismo, consulta la disponibilidad y paga al instante. El pago lo puedes realizar mediante <strong>tarjeta de crédito/débito, tiendas OXXO y déposito bancario</strong>.</p>
        	</div>
        </div>
      </div>
    </div>
<!-- End Services -->

@stop

@section('js')
<script>
  $('#inicio').addClass('active');
</script>
@stop