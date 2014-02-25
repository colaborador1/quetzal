@extends('layout')

@section('title')
Ubicación, cómo llegar | Hotel Quetzalcalli | Teotihuacán, México
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><span class="glyphicon glyphicon-plane"></span> Encuéntranos de una manera fácil y rápida</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-5">
			<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Hotel+Quetzalcalli,+San+Sebasti%C3%A1n+Xolalpa,+Teotihuac%C3%A1n+de+Arista&amp;aq=0&amp;oq=Hotel+Quetza&amp;sll=19.677644,-98.848927&amp;sspn=0.001586,0.002503&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=19.677524,-98.849211&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br />

			<h4>Ver <a href="https://maps.google.com.mx/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=Hotel+Quetzalcalli,+San+Sebasti%C3%A1n+Xolalpa,+Teotihuac%C3%A1n+de+Arista&amp;aq=0&amp;oq=Hotel+Quetza&amp;sll=19.677644,-98.848927&amp;sspn=0.001586,0.002503&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=19.677524,-98.849211&amp;spn=0.006295,0.006295&amp;t=m" style="color:#0000FF;text-align:left" target="_blank"><button class="btn-info btn sm">Hotel Quetzalcalli</button> </a> en un mapa ampliado</h4>
		</div>
		<div class="col-md-7">
			<h3>Nos encontramos en Calle Constitución No.8 San Sebastián Xolalpa, <strong>Teotihuacan</strong>, Estado de México.</h3>
			<p>Si tienes problemas para llegar puedes contactarnos en:</p>
			<ul class="list-group">
			  <li class="list-group-item"><span class="glyphicon glyphicon-phone"></span> 01-594-10-16-037</li>
			  <li class="list-group-item"><span class="glyphicon glyphicon-envelope"></span> info@hotelquetzalcalli.com</li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h2>¿Cómo llegar?</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h3>Si vienes de la zona norte del D.F.</h3>
			<p>Te recomendamos que tomes la autopista México-Pirámides-Tulancingo (solo una cuota de peaje) saliendo de Insurgentes Norte</p>
		</div>
		<div class="col-md-6">
			<h3>Si vienes del occidente del D.F.</h3>
				<p>Te recomendamos que tomes la autopista México-Pirámides-Tulancingo (solo una cuota de peaje) saliendo de Insurgentes Sur en el D.F.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h3>Si vienes de la zona norte del D.F.</h3>
			<p>Te recomendamos que tomes la autopista México-Pirámides-Tulancingo (solo una cuota de peaje) saliendo de Insurgentes Sur en el D.F.</p>
		</div>
		<div class="col-md-6">
			<h3>Si vienes del occidente del D.F.</h3>
				<p>Te recomendamos que tomes la autopista México-Pirámides-Tulancingo (solo una cuota de peaje) saliendo de Insurgentes Sur en el D.F.</p>
		</div>
	</div>

</div>
@stop

@section('js')
<script>
  $('#ubicacion').addClass('active');
</script>
@stop