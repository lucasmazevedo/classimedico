@extends($layout)

@section('content')
 
<div class="row">
				<!-- banner -->
				<div class="col-sm-12">
					<div class="banner">						
						<!-- banner-form -->
						<div class="banner-form banner-form-full">
							<form action="#">
								<!-- category-change -->
								<div class="dropdown category-dropdown">						
									<a data-toggle="dropdown" href="#"><span class="change-text">Selecione Categoria</span> <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu category-change">
										@foreach ($categories as $category)
											<li><a href="#">{{ $category->name }}</a></li>
										@endforeach
									</ul>								
								</div><!-- category-change -->
								
								<input type="text" class="form-control" placeholder="Digite sua Busca">
								<button type="submit" class="form-control" value="Search">Buscar</button>
							</form>
						</div><!-- banner-form -->	
					</div>
				</div><!-- banner -->
			</div><!-- row -->	

			<!-- featureds -->
			<div class="section featureds">
				<div class="row">
					<div class="col-sm-12">
						<div class="featured-top">
							<h4>DESTAQUES</h4>
						</div>
					</div>
				</div>
				
				
			</div><!-- featureds -->

			<!-- ad-section -->						
			<div class="ad-section text-center">
				<a href="#"><img src="images/ads/3.jpg" alt="Image" class="img-responsive"></a>
			</div><!-- ad-section -->

			<!-- trending-ads -->
			<div class="section trending-ads">
				<div class="section-title tab-manu">
					<h4>Últimos Anúncios</h4>
					 <!-- Nav tabs -->      
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#recent-ads"  data-toggle="tab">Últimos Anúncios</a></li>
						<li role="presentation"><a href="#popular" data-toggle="tab">Mais Vistos</a></li>
						<li role="presentation"><a href="#hot-ads"  data-toggle="tab">Destaques</a></li>
					</ul>
				</div>

				<!-- Tab panes -->
				<div class="tab-content">
					<!-- tab-pane -->
					<div role="tabpanel" class="tab-pane fade in active" id="recent-ads">
						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/1.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 6.650,00</h3>
									<h4 class="item-title"><a href="#">Sistema de Gestão de Imagem Stryker SDC Ultra HD</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->
						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/3.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 6.650,00</h3>
									<h4 class="item-title"><a href="#">Sistema de Gestão de Imagem Stryker SDC Ultra HD</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->

						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/1.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 6.650,00</h3>
									<h4 class="item-title"><a href="#">Sistema de Gestão de Imagem Stryker SDC Ultra HD</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->

						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/5.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 6.650,00</h3>
									<h4 class="item-title"><a href="#">Sistema de Gestão de Imagem Stryker SDC Ultra HD</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->

						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/2.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 6.650,00</h3>
									<h4 class="item-title"><a href="#">Sistema de Gestão de Imagem Stryker SDC Ultra HD</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->

						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/4.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 6.650,00</h3>
									<h4 class="item-title"><a href="#">Sistema de Gestão de Imagem Stryker SDC Ultra HD</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->
						
					</div><!-- tab-pane -->
					
					<!-- tab-pane -->
					<div role="tabpanel" class="tab-pane fade" id="popular">
						
						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/5.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 650,00</h3>
									<h4 class="item-title"><a href="#">Autoclave Vitale 21 litros - Cristófoli</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->
						
						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/2.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 650,00</h3>
									<h4 class="item-title"><a href="#">Autoclave Vitale 21 litros - Cristófoli</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/1.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 650,00</h3>
									<h4 class="item-title"><a href="#">Autoclave Vitale 21 litros - Cristófoli</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->

						<!-- ad-item -->							
					</div><!-- tab-pane -->

					<!-- tab-pane -->
					<div role="tabpanel" class="tab-pane fade" id="hot-ads">
						
						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/3.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 650,00</h3>
									<h4 class="item-title"><a href="#">Autoclave Vitale 21 litros - Cristófoli</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->

						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/4.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 650,00</h3>
									<h4 class="item-title"><a href="#">Autoclave Vitale 21 litros - Cristófoli</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->

						<!-- ad-item -->
						<div class="ad-item row">
							<!-- item-image -->
							<div class="item-image-box col-sm-3">
								<div class="item-image">
									<a href="/"><img src="images/featured/5.jpg" alt="Image" class="img-responsive"></a>
									<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
								</div><!-- item-image -->
							</div>
							
							<!-- rending-text -->
							<div class="item-info col-sm-9">
								<!-- ad-info -->
								<div class="ad-info">
									<h3 class="item-price">R$ 650,00</h3>
									<h4 class="item-title"><a href="#">Autoclave Vitale 21 litros - Cristófoli</a></h4>
									<div class="item-cat">
										<span><a href="#">Equipamentos Médicos Diversos </a></span>
									</div>	
								</div><!-- ad-info -->
								
								<!-- ad-meta -->
								<div class="ad-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">07/01/2016 às 10:23h</a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Usado</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Teresina, Piauí"><i class="fa fa-map-marker"></i> </a>
										<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Empresa"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- ad-meta -->
							</div><!-- item-info -->
						</div><!-- ad-item -->

						<!-- ad-item -->
							
					</div><!-- tab-pane -->
				</div>
			</div><!-- trending-ads -->			

			<!-- cta -->
			<div class="cta text-center">
				<div class="row">
					<!-- single-cta -->
					<div class="col-sm-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-secure">
								<img src="images/icon/001.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->

							<h4>Crie Sua Conta!</h4>
							<p>Faça o login ou crie uma conta para ter acesso ao sistema</p>
						</div>
					</div><!-- single-cta -->

					<!-- single-cta -->
					<div class="col-sm-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-support">
								<img src="images/icon/002.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->

							<h4>Informações do Produto</h4>
							<p>Insira as informações do produto que você quer vender!</p>
						</div>
					</div><!-- single-cta -->

					<!-- single-cta -->
					<div class="col-sm-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-trading">
								<img src="images/icon/003.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->

							<h4>Venda, Negocie, Troque</h4>
							<p>Receba notificações, email de pessoas interessadas no seu produto!</p>
						</div>
					</div><!-- single-cta -->
				</div><!-- row -->
			</div><!-- cta -->											
		</div><!-- container -->
	</section><!-- home-one-info -->
	

 @endsection