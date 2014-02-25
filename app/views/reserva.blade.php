@extends('layout')

@section('title')
Reservaciones en línea | Hotel Quetzalcalli | Teotihuacán, México
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><span class="glyphicon glyphicon-ok"></span> Reserva ahora y paga al instante</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li class="active"><a href="#tarjeta" data-toggle="tab">Tarjeta de crédito/débito</a></li>
                <li><a href="#deposito" data-toggle="tab">Déposito bancario</a></li>
                <li><a href="#oxxo" data-toggle="tab">Oxxo</a></li>
              </ul>

              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="tarjeta">
                  <div class="row">
					<div class="col-md-12">
						<h3><span class="glyphicon glyphicon-credit-card"></span> Pago con tarjeta de crédito/débito</h3>
					</div>
				  </div>

				  <div class="row">
				  	<div class="col-md-7">
				  		<h4>Tarjetas aceptadas</h4>
				  		{{ HTML::image('img/visa.png', 'Visa', array('class' => 'img-responsive')) }}
				  		{{ HTML::image('img/mastercard.png', 'Visa', array('class' => 'img-responsive')) }}
				  	</div>
				  </div>
				  <br>

				  <div class="row">
					<div class="col-md-7">
						<div class="well">
							<div class="form-horizontal">
								<fieldset>
									<div class="form-group">
										<label for="card-name" class="col-md-4 control-label">Nombre de tarjeta-habiente</label>
										<div class="col-md-8">
											<input type="text" id="card-name" placeholder="Nombre de tarjeta-habiente" class="form-control input-sm">
										</div>
									</div>

									<div class="form-group">
										<label for="card-number" class="col-md-4 control-label">Número de tarjeta</label>
										<div class="col-md-8">
											<input type="text" id="card-number" placeholder="Número de tarjeta" class="form-control input-sm">
										</div>
									</div>

									<div class="form-group">
										<label for="card-month" class="col-md-4 control-label">Fecha de expiración</label>
										<div class="col-md-3">
											<input type="text" id="card-month" placeholder="mm" class="form-control input-sm">
										</div>
										<label for="card-year" class="col-md-2 control-label">-</label>
										<div class="col-md-3">
											<input type="text" id="card-year" placeholder="yyyy" class="form-control input-sm">
										</div>
									</div>

									<div class="form-group">
									</div>

									<div class="form-group">
										<label for="card-cvc" class="col-md-4 control-label">Código de seguridad</label>
										<div class="col-md-8">
											<input type="text" id="card-cvc" placeholder="Código de seguridad" class="form-control input-sm">
										</div>
									</div>

									<div class="form-group">
										<label for="street1" class="col-md-4 control-label">Dirección</label>
										<div class="col-md-8">
											<input type="text" id="street1" placeholder="Calle y número" class="form-control input-sm">
											<input type="text" id="street3" placeholder="Colonia" class="form-control input-sm">
											<input type="text" id="street2" placeholder="Delegación/Municipio" class="form-control input-sm">
											<input type="text" id="city" placeholder="Ciudad" class="form-control input-sm">
											<input type="text" id="state" placeholder="Estado" class="form-control input-sm">
											<input type="text" id="zip" placeholder="Código postal" class="form-control input-sm">
											<select id="country" class="form-control input-sm">
												<option value="DE">Alemania</option>
												<option value="MX" selected="selected">México</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-8 col-md-offset-4">
											<button class="btn btn-danger btn-sm" id="cancel">Cancelar</button>
											<button class="btn btn-success btn-sm" id="ok">Envíar pago</button>
										</div>
									</div>

								</fieldset>
							</div>
						</div>
					</div>
				  	<div class="col-md-5" id="message">
				  		<div class="alert alert-dismissable alert-success">
			              <button type="button" class="close" data-dismiss="alert">×</button>
			              <strong>¡Correcto!</strong> Mensaje.
			            </div>

			            <div class="alert alert-dismissable alert-danger">
			              <button type="button" class="close" data-dismiss="alert">×</button>
			              <strong>¡Error!</strong> Mensaje.
			            </div>

			            <div class="alert alert-dismissable alert-warning">
			              <button type="button" class="close" data-dismiss="alert">×</button>
			              <strong>¡Cuidado!</strong> Mensaje.
			            </div>

			            <div class="alert alert-dismissable alert-info">
			              <button type="button" class="close" data-dismiss="alert">×</button>
			              <strong>¡Informativo!</strong> Mensaje.
			            </div>
				  	  </div>
				   </div>
                </div>
                
                <div class="tab-pane fade" id="deposito">
                  <div class="row">
					<div class="col-md-12">
						<h3><span class="glyphicon glyphicon-credit-card"></span> Déposito bancario o transferencia bancaria automática</h3>
					</div>
				  </div>
                  <div class="row">
				  	<div class="col-md-12">
				  		<h4>Bancos</h4>
				  		{{ HTML::image('img/banorte.png', 'Banorte', array('class' => 'img-responsive')) }}
				  	</div>
				  </div>
				  <br>

				  <div class="row">
					<div class="col-md-6">
						<div class="well">
							<div class="form-horizontal">
								<fieldset>
									<div class="form-group">
										<label for="card-name" class="col-md-4 control-label">Nombre</label>
										<div class="col-md-8">
											<input type="text" id="card-name" placeholder="Nombre" class="form-control input-sm">
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-8 col-md-offset-4">
											<button class="btn btn-danger btn-sm" id="cancel">Cancelar</button>
											<button class="btn btn-success btn-sm" id="ok">Generar pago</button>
										</div>
									</div>

								</fieldset>
							</div>
						</div>
					</div>
				  	<div class="col-md-6" id="message">
				  		<div class="alert alert-dismissable alert-success">
			              <button type="button" class="close" data-dismiss="alert">×</button>
			              <strong>¡Correcto!</strong> Mensaje.
			            </div>

			            <div class="alert alert-dismissable alert-danger">
			              <button type="button" class="close" data-dismiss="alert">×</button>
			              <strong>¡Error!</strong> Mensaje.
			            </div>

			            <div class="alert alert-dismissable alert-warning">
			              <button type="button" class="close" data-dismiss="alert">×</button>
			              <strong>¡Cuidado!</strong> Mensaje.
			            </div>

			            <div class="alert alert-dismissable alert-info">
			              <button type="button" class="close" data-dismiss="alert">×</button>
			              <strong>¡Informativo!</strong> Mensaje.
			            </div>
				  	  </div>
				   </div>
                </div>
                <div class="tab-pane fade" id="oxxo">
                	<div class="row">
						<div class="col-md-12">
							<h3><span class="glyphicon glyphicon-credit-card"></span> Pago en tiendas Oxxo</h3>
						</div>
				    </div>
                  <div class="row">
				  	<div class="col-md-12">
				  		{{ HTML::image('img/oxxo.png', 'Oxxo', array('class' => 'img-responsive')) }}
				  	</div>
				  </div>
                </div>
              </div>
		</div>
	</div>

</div>
@stop

@section('js')
<script>
	$('#reservaciones').addClass('active');
</script>
@stop