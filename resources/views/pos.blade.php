@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
          <div class="row">
            @foreach($menus as $menu)
						<div class="col-md-1">
              <input type="button" class="btn btn-success" name="item" value="{{$menu->type . $menu->price}}">
						</div>
            @endforeach
          </div>
					<table class="table">
						<thead>
							<tr>
								<th>
									Codigo
								</th>
								<th>
									Nombre
								</th>
								<th>
									Precio
								</th>
								<th>
									Agregar
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                @foreach($products as $product)
								<td>
									{{$product->barcode}}
								</td>
								<td>
									{{$product->name}}
								</td>
								<td>
									${{$product->price_sale}}
								</td>
								<td>
									<input type="button" class="btn btn-success" name="add" value="Agregar">
								</td>
                @endforeach
							</tr>

						</tbody>
					</table>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-8">
							<table class="table">
								<thead>
									<tr>
										<th>
											Nombre
										</th>
										<th>
											Precio
										</th>
										<th>
											Cantidad
										</th>
										<th>
											Subtotal
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											1
										</td>
										<td>
											TB - Monthly
										</td>
										<td>
											01/04/2012
										</td>
										<td>
											Default
										</td>
									</tr>

								</tbody>
							</table>
              <div class="row">
						<div class="col-md-4">
              <!-- Search form -->
              <div class="active-cyan-3 active-cyan-4 mb-4">
                  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
              </div>
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
						</div>
					</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-4">
									 <span class="badge badge-default">Fecha</span>
								</div>
								<div class="col-md-4">
									 <span class="badge badge-default">Numero de venta</span>
								</div>
								<div class="col-md-4">
									 <span class="badge badge-default"></span>
								</div>
							</div>
							<form role="form">
								<div class="form-group">

									<label for="exampleInputEmail1">
										Total
									</label>
									<input class="form-control" id="exampleInputEmail1" type="email" />
								</div>
								<div class="form-group">

									<label for="exampleInputPassword1">
										Importe
									</label>
									<input class="form-control" id="exampleInputPassword1" type="password" />
								</div>

                <div class="form-group">

									<label for="exampleInputPassword1">
										Cambio
									</label>
									<input class="form-control" id="exampleInputPassword1" type="password" />
								</div>
								<div class="form-group">


								<button type="submit" class="btn btn-primary">
									Realizar venta
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
