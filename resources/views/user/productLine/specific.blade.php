<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- meta and links -->
		@include('user.tags.head')

		<title>Classic Models</title>
		<!-- END -->
	</head>
	<body>
		<!-- header -->
		<div class="header__content">
			<div class="header__logo">
				<a class="link" href="{{url('/')}}" style="padding-top: 8px;padding-left: 20px;">
					<div class="header__logo img">
						<img src="{{url('classic-logoo.png')}}" alt=""> 
					</div>
				</a>
			</div>

			<div class="header__menu">
				<ul class="header__nav">
					<!--HomeTab-->
					<li class="header__nav-item">
						<a href="{{url('/')}}" class="header__nav-link">Home</a>
					</li>

					<!--Category-->
					<li class="header__nav-item">
						<a class="header__nav-link" href="#" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product Category <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z" /></svg></a>
						<ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenuHome">
							@foreach ($categories as $categ)
								<a href="/productLine/productListperCateg/{{$categ -> productLine}}">{{$categ -> productLine}}</a>
							@endforeach
						</ul>
					</li>

					<!--About Us-->
					<li class="header__nav-item">                   
						<a href="{{url('/productLine/about')}}" class="header__nav-link">About Us</a>
					</li>
				</ul>
			</div>

			<div class="header__actions">
				<div class="header__action header__action--search">
					<button class="header__action-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>
				</div>

				<!-- LOGIN / REGISTER BUTTON -->
				@if(Route::has('login'))
					@auth
						<h1 style="color: white;">Welcome, {{ Auth::user()->name }}!</h1>
						<x-app-layout>
						</x-app-layout>
				@else
						<a style="width: 80px;height: 30px;background: #659BDF;border-radius: 5px;text-align: center;padding-top: 3px;color: #fff;" href="{{route('login')}}">login</a>&nbsp&nbsp&nbsp
						<a style="width: 80px;height: 30px;background: #659BDF;border-radius: 5px;text-align: center;padding-top: 3px;color: #fff;" href="{{route('register')}}">register</a>
					@endauth
				@endif
				<!-- END LOGIN / REGISTER BUTTON -->
			</div>
		</div>
		<!-- END header-->

		<!-- main content -->
		<main class="main">
			<div class="container">
				<div class="row row--grid">
					<!-- breadcrumb -->
					<div class="col-12">
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="/productLine/productListperCateg/{{$products -> productLine}}">Product Line: {{$products->productLine}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp></a></li>
							<li class="breadcrumb__item"><a href="#">Product Code: {{$products->productCode}}</a></li>
						</ul>
					</div>
					<!-- end breadcrumb -->
					
					<!-- title -->
					<div class="col-12">
						<div class="main__title main__title--page">
							<h1>{{$products->productName}}</h1>
						</div>
					</div>
					<!-- end title -->
				</div>

				<div class="row">
					<!-- content -->
					<div class="col-8 col-xl-8">
						<div class="asset__item">
							<a class="asset__img" href="#"><img src="/productsimage/{{$products -> image}}" alt="" style="width: 800px;height: 840px;"></a>
						</div>
					</div>
					<!-- end content -->
					<a id="buttonup"></a>
					<!-- sidebar -->
					<div class="col-12 col-xl-4">
						<div class="asset__info">
							<div class="asset__desc">
								<h2>Descriptions</h2>
								<p>{{$products->productDescription}}</p>
							</div>
							<ul class="asset__authors">
								<li>
									<span>Manufacturer</span>
									<div class="asset__author asset__author--verified">
										<img src="{{url('a5.png')}}" alt="">
										<a href="#">{{$products->productVendor}}</a>
									</div>
								</li>
							</ul>

							<!-- tabs -->
							<ul class="nav nav-tabs asset__tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Basic Information</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">More Details</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
									<div class="asset__actions asset__actions--scroll" id="asset__actions--scroll">
										<div class="asset__action">
											<p>Product Name <a href="#"><b>{{$products->productName}}</b></a></p>
										</div>
										<div class="asset__action">
											<p>Product Code <a href="#"><b>{{$products->productCode}}</b></a></p>
										</div>
										<div class="asset__action">
											<p>Product Scale <a href="#"><b>{{$products->productScale}}</b></a></p>
										</div>
										<div class="asset__action">
											<p>Product Line <a href="/productLine/productListperCateg/{{$products -> productLine}}"><b>{{$products->productLine}}</b></a></p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="tab-2" role="tabpanel">
									<div class="asset__actions asset__actions--scroll" id="asset__actions--scroll">
										<div class="asset__action">
											<p>Stock <a href="#"><b>{{$products->quantityInStock}}</b></a></p>
										</div>
										<div class="asset__action">
											<p>Buy Price <a href="#"><b>{{$products->buyPrice}} USD</b></a></p>
										</div>
										<div class="asset__action">
											<p>MSRP <a href="#"><b>{{$products->MSRP}}  </b></a></p>
										</div>
									</div>
								</div>
							</div>
							<!-- end tabs -->

							<div class="asset__wrap">
								<div class="asset__timer">
									<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.3,8.59l.91-.9a1,1,0,0,0-1.42-1.42l-.9.91a8,8,0,0,0-9.79,0l-.91-.92A1,1,0,0,0,4.77,7.69l.92.91A7.92,7.92,0,0,0,4,13.5,8,8,0,1,0,18.3,8.59ZM12,19.5a6,6,0,1,1,6-6A6,6,0,0,1,12,19.5Zm-2-15h4a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2Zm3,6a1,1,0,0,0-2,0v1.89a1.5,1.5,0,1,0,2,0Z"/></svg> Hurry command get the limited edition!</span>
									<div class="asset__clock"></div>
								</div>
								<div class="asset__price">
									<span>MSRP</span>
									<span>{{$products->MSRP}}  </span>
								</div>
							</div>

							<!-- actions -->
							<div class="asset__btns">
								<a href="#modal-bid" class="asset__btn asset__btn--full asset__btn--clr open-modal">Buy Now</a>
							</div>
							<!-- end actions -->
						</div>
					</div>
					<!-- end sidebar -->
				</div>
				

				<!-- categories section -->
				<div class="container">
					<section class="row row--grid">
						<!-- title -->
						<div class="col-12">
							<div class="main__title">
								<h2>Model Collections</h2>
							</div>
						</div>
						<!-- end title -->			

						<!-- carousel -->							
						<div class="col-12">
							<div class="main__carousel-wrap">
								<div class="main__carousel main__carousel--collections owl-carousel" id="collections">
									<!-- carousel -->
									@foreach ($categories as $categ)
										<div class="collection">										
											<a href="/productLine/productListperCateg/{{$categ -> productLine}}" class="collection__cover" data-bg="/productlinesimage/{{$categ -> image}}" style="margin-bottom: 20px;"></a>
											<h3 class="collection__name">
												<a href="/productLine/productListperCateg/{{$categ -> productLine}}">
													{{$categ -> productLine}}
												</a>
											</h3>
										</div>
									@endforeach
								</div>
								<button class="main__nav main__nav--prev" data-nav="#collections" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" /></svg></button>
								<button class="main__nav main__nav--next" data-nav="#collections" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" /></svg></button>
							</div>
						</div>
						<!-- end carousel --> 
					</section>
				</div>
				<!-- end categories section -->
			</div>
		</main>
		<!-- end main content -->

		<!-- footer -->
		<footer class="footer">
			@include('user.productLine.footer')
		</footer>
		<!-- end footer -->

		<!-- modal bid -->
		<div id="modal-bid" class="zoom-anim-dialog mfp-hide modal modal--form">
			<button class="modal__close" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg></button>
			<h4 class="sign__title">Place a bid</h4>
			<div class="sign__group sign__group--row">
				<label class="sign__label" for="placebid">Your bid</label>
				<input id="placebid" type="text" name="placebid" class="sign__input">
				<span class="sign__text sign__text--small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</span>
			</div>
			<button class="sign__btn" type="button">Take a bid</button>
		</div>
		<!-- end modal bid -->

		<!-- JS -->
		<script type="text/javascript" src="{{ URL::asset('js/jquery-3.5.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/select2.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/smooth-scrollbar.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/jquery.countdown.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/buttonup.js') }}"></script>
	</body>
</html>
