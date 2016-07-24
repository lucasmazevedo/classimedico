
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Anúncios Médicos | Classificados de Equipamentos Médicos</title>

   <!-- CSS -->
    <link rel="stylesheet" href="{{ $url = asset('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ $url = asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ $url = asset('css/icofont.css') }}">
    <link rel="stylesheet" href="{{ $url = asset('css/owl.carousel.css') }}">  
    <link rel="stylesheet" href="{{ $url = asset('css/slidr.css') }}">     
    <link rel="stylesheet" href="{{ $url = asset('css/main.css') }}">  
	<link id="preset" rel="stylesheet" href="{{ $url = asset('css/presets/preset1.css') }}">	
    <link rel="stylesheet" href="{{ $url = asset('css/responsive.css') }}">
	
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<!-- <link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png"> -->
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  </head>
  <body>
  <!-- header -->
	<header id="header" class="clearfix">
	<div style="width:100%; background:#05293D; height:40px;">
		<div class="container">
			<ul class="sign-in pull-right">
				<li><i class="fa fa-user"></i></li>
				<li><a href="/"> Entrar </a></li>
				<li><a href="/">Cadastrar</a></li>
			</ul><!-- sign-in -->	
		</div>				
	</div>
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">
					<img class="img-responsive" src="{{ $url = asset('images/logo.png') }}" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="/">Ínicio</a></li>
							<li><a href="/sobre">Sobre</a></li>
							<li><a href="/">Como Anunciar?</a></li>
							<li><a href="/">Buscar Produtos</a></li> 
							<li><a href="/">Fale Conosco</a></li> 
						</ul>
					</div>
				</div>
				
				<!-- nav-right -->
				<div class="nav-right">
					<a href="/" class="btn">Publicar Anúncio Grátis</a>
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<!-- home-one-info -->
	<section id="home-one-info" class="clearfix home-one">
		<!-- world -->
		<div id="banner-two" class="parallax-section">
			<div class="row text-center">
				<!-- banner -->
				<div class="col-sm-12 ">
					<div class="banner">
						<h1 class="title">Venda, Troque, Divulgue, Negocie!</h1>
						<h3>O maior classificado de equipamentos, produtos e serviços do pais!</h3>

						<!-- banner-socail -->
						<ul class="banner-socail">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul><!-- banner-socail -->
					</div>
				</div><!-- banner -->
			</div><!-- row -->
		</div><!-- world -->

		<div class="container">
            @yield('content')
       	</div>
	<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>Anúncios</h3>
							<ul>
								<li><a href="#">Categorias</a></li>
								<li><a href="#">Listagem</a></li>
								<li><a href="#">Publicar Anúncio</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>Ajuda</h3>
							<ul>
								<li><a href="#">Como Funciona?</a></li>
								<li><a href="#">Como Anúnciar</a></li>
								<li><a href="#">Fale Conosco</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget social-widget">
							<h3>Siga-Nos</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget news-letter">
							<h3>Novidades</h3>
							<p>Cadastre-se e receba novidades no seu e-mail.</p>
							<!-- form -->
							<form action="#">
								<input type="email" class="form-control" placeholder="Seu email">
								<button type="submit" class="btn btn-primary">Cadastrar</button>
							</form><!-- form -->			
						</div>
					</div><!-- footer-widget -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- footer-top -->

		
		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; 2016. Desenvolvido por AzevedoDev - AnunciosMedicos.com.br</a></p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->
	
		
     <!-- JS -->
    <script src="{{ $url = asset('js/jquery.min.js') }}"></script>
    <script src="{{ $url = asset('js/modernizr.min.js') }}"></script>
    <script src="{{ $url = asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ $url = asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ $url = asset('js/smoothscroll.min.js') }}"></script>
    <script src="{{ $url = asset('js/scrollup.min.js') }}"></script>
    <script src="{{ $url = asset('js/price-range.js') }}"></script>    
    <script src="{{ $url = asset('js/custom.js') }}"></script>
	<script src="{{ $url = asset('js/switcher.js') }}"></script>

  </body>
</html>