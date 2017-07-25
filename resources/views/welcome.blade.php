<!DOCTYPE html>
<html lang="en">
<head>
  <title>{!!$data->tituloH1!!}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
  <script src="/js.min.js"></script>
  <link href="/css.min.css" rel="stylesheet" type="text/css">
  <link href="/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container-fluid">
   
  @include("header")
    
	
	
  <div class="container main wrapper">
  
  
  
	  <div class="content">
	  
	  
	  <div class="left-column">
	  
	  
	  <div class="top-visual carousel-active">
	  
			<div id="myCarousel" class="item carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  @foreach($data->img as $index=>$value)
				<li data-target="#myCarousel" data-slide-to="{!!$index+1!!}" ></li>
			  @endforeach
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
					<div class="item active">
						<iframe
						  width="690"
						  height="518"
						  frameborder="0" style="border:0"
						  src="https://www.youtube.com/embed/{!!  $data->paramsYT['v']!!}" >
						</iframe>
					</div>			  
				@foreach($data->img as $index=>$value)
					<div class="item ">
					  <img src="{!!$value->source!!}" alt="{!!$value->alt!!}">
					</div>
				@endforeach

			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
	  
	  
			<div id="myGoogleMap" class="item" >
				<iframe
				  width="690"
				  height="518"
				  frameborder="0" style="border:0"
				  src="{!!$data->maps360!!}" >
				</iframe>
			</div>
	  
			<div  class="buttons" >
			
			
	  
			  <a class="left" data-item="carousel" >
				<span class=""><i class="fa fa-image"></i> Ver imagenes</span>
			  </a>
			  <a class="right" data-item="map">
				<span class=""><i class="fa fa-eye"></i> 360</span>
			  </a>
			
			
			</div>

	  
	  </div><!--top-visual-->
	  
	  
	  
	  <div class="clearfix"></div>
	  
	  <div class="text">
	  
	  <h1>	{!!$data->tituloH1!!}  </h1>
	  <p>	{!!$data->descripcion!!}  </p>
	  
	  
	  
	  <h1>	Atractivos Principales  </h1>
	  
	  <div class="atractivos">
			@foreach($data->atractivos as $index=>$value)
			
			<a href="{!!$value->link!!}" title="{!!$value->titulo!!}">
				<img src="{!!$value->img!!}" alt="{!!$value->titulo!!}">
				<p >
				  {!!$value->desc!!}
				</p>
			</a>
			<div class="clearfix"></div>
			@endforeach
	  </div>
	  
	  <a href="{!!$data->CTA!!}" id="btnQuote" class="btn btn-lg pull-right">Cotizar mi entrada ahora</a>
	  
	  </div>
	  
	  
	  
	  </div><!--left-column-->
	  
	  
	  
	  
	  
	  <div class="right-column">
	  
	  <div class="offers">
	  
	  
	  <div class="head">
			COMPRA AQUÍ
			<br><span>Y obtén hasta un 15% de descuento</span>
	   </div>
	  <div class="body">
	  
<label class="product">NOMBRE DEL PRODUCTO</label>


<label class="regular-price">Precio regular: <br><span>$8,000.00 MXN</span>
</label>

<label class="online-price addition">
<input type="checkbox" value="1"> Precio en línea: <span>$0,000.00 MXN</span>
</label>

<label class="addition">
<input type="checkbox" value="1"> Agregar transportación redonda desde tu hotel: $1,000.00 MXN
</label>

<label class="addition">
<input type="checkbox" value="1"> Agregar Foto Pase: $2,000.00 MXN
</label>


<a href="{!!$data->CTA!!}"  id="buyNow" class="btn btn-lg btn-block">Comprar Ahora</a>



	  
	   </div>
	  

		  
		<div class="more">
		  
			<p>	  
			<br>10% de descuento - reservando con 7-20 días de anticipación.
			<br>15% de descuento -reservando con 21 días o más de anticipación.
			<br>Precios sujetos a cambios sin previo aviso.
			</p>
					  <b>¿Porqué reservar con nosotros?<b>
		  
			  <ul >
			  
			  <li>
				<span class="big">-10% </span>
				<span class="small">En tu compra</span>
			  </li>
			  			  
			  <li>
				<span class="big">-15% </span>
				<span class="small">En tu compra</span>
			  </li>
			  			  
			  <li>
				<span class="big">-50% </span>
				<span class="small">Para niños</span>
			  </li>
			  			  
			  <li>
				<span class="big"><i class="fa fa-credit-card"></i> </span>
				<span class="small">Meses sin intereses</span>
			  </li>
			  			  
			  <li>
				<span class="big"><i class="fa fa-lock"></i> </span>
				<span class="small">Compra segura</span>
			  </li>
			  			  
			  <li>
				<span class="big"><i class="fa fa-usd"></i> </span>
				<span class="small">Precio bajo garantizado</span>
			  </li>			  			  
			  <li>
				<span class="big">VIP </span>
				<span class="small">Taquillas especiales</span>
			  </li>			  			  
			  <li>
				<span class="big"><i class="fa fa-cloud"></i> </span>
				<span class="small">Garantia mal clima</span>
			  </li>			  			  
			  <li>
				<span class="big"><i class="fa fa-shield"></i> </span>
				<span class="small">Seguro de viaje</span>
			  </li>
			  
			  </ul>
			  
		</div>
	  
	
	
	
	  
	  </div><!--offers-->	
	  
	  </div><!--right-column-->	  
	  <div class="clearfix"></div>
	  
	<div class="credit-card-info">
	
	
	<label >HASTA 9 MESES SIN INTERESES</label>
	<img src="https://uc.uxpin.com/files/103822/110843/logo-msi-2-1.png?1468080138" alt="Tarjetas Participantes">
	
	<div class="clearfix"></div>
	<p>Con los principales bancos y tarjetas emitidas en México. No aplica con Paypal <a href="#">Ver opciones »</a></p>
	
	</div>
	  
	  
	  
	  
	  </div><!--content-->

	  
	  
	  
	  
  </div>
  
  
  
  
  
    @include("footer")
  
</div>

</body>
</html>



        

