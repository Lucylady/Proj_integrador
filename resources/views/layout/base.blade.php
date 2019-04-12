<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

<link rel="icon" type="imagem/png" href="{{asset('img/lapis_icon.png')}}"/>

    <title>Oficina de redação Enem 2019</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <style type="text/css">
   	.centralizar
   	{
   		text-align: center;
   	}
   	.justificar
   	{
   		text-align: justify;
   	}

   </style>


<script src="{{asset('js/alertify.min.js')}}"></script>
  <link rel = "stylesheet" href = "{{asset('css/alertify.min.css')}}" />
  <link rel = "stylesheet" href = "{{asset('css/themes/default.min.css')}}" />
  <meta name = "viewport" content = "{{asset('width = device-width')}}">

  </head>

  <body>


<nav class="navbar navbar-expand-lg navbar-dark bg-info" >
  <a class="navbar-brand" href="/"><strong>Início</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!--<li class="nav-item active">
        <a class="nav-link" href="#">obg <span class="sr-only">(current)</span></a>
      </li>-->
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <strong>Sobre a oficina</strong>  
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/selecionados"> Lista dos oficineiros</a>
        </div>
      </li>
    </ul>
    </div>
</nav>





<div class="container-fluid">
	

	<div class="row">
		<div class="col-12">
      <br />
			<p class="centralizar"><img src="{{asset('img/logo.png')}}" width="30%" class="img-fluid" alt="" /></p>
		</div>
	</div>


@yield('conteudo')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
