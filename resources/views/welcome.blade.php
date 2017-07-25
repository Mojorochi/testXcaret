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
  <script src="/js.js"></script>
  <link href="/css.css" rel="stylesheet" type="text/css">
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
			  @foreach($data->img as $index=>$value)
				<li data-target="#myCarousel" data-slide-to="{!!$index!!}" class="active"></li>
			  @endforeach
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			  
				@foreach($data->img as $index=>$value)
					<div class="item {!!$index>0?'':'active'!!}">
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
	  
	  
	  </div>
	  
	  
	  
	  </div><!--left-column-->
	  
	  
	  
	  
	  
	  <div class="right-column">
	  
	  <div class="offers">
	  
	  
	  <div class="head">
			COMPRA AQUÍ
			<br><span>Y obtén hasta un 15% de descuento</span>
	   </div>
	  <div class="body">
	  
NOMBRE DEL PRODUCTO


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


	  
	  
	   </div>
	  


	  
	  
	  
	  </div><!--offers-->	
	  
	  </div><!--right-column-->	  
	  
	  
	  
  
	  
	  
	  
	  
	  </div><!--content-->

	  
	  
	  
	  
  </div>
  
  
  
  
  
    @include("footer")
  
</div>

</body>
</html>



        

