<div class="home home--hero">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="hero owl-carousel" id="hero">
					@foreach ($products as $product)																	
						<div class="hero__slide">		
							<div class="row">
								<div class="col-sm-8" style="width: 1100px;"><h1 class="hero__title">{{$product -> productLine}}</h1><br>
									<p class="hero__text" style="text-align: justify;">{{$product -> textDescription}}</p>
								</div>
								<div class="col-sm-4"><img style="width: 300px;height: 200px;margin-top: 35%;margin-left: 20%;" src="/productlinesimage/{{$product -> image}}"></div>
							</div>			
							<div class="hero__btns">
								<!--Link on the specific product details-->
								<a href="/productLine/productListperCateg/{{$product->productLine}}" class="hero__btn hero__btn--clr"> More details</a>
								<button class="main__nav main__nav--hero main__nav--prev" data-nav="#hero" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" /></svg></button>
								<button class="main__nav main__nav--hero main__nav--next" data-nav="#hero" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" /></svg></button>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>