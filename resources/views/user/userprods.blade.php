<div class="col-12">
	<div class="main__carousel-wrap">
		<div class="main__carousel main__carousel--collections owl-carousel" id="collections">
			<!-- carousel -->
			@foreach ( $products as $product )
				<div class="collection">										
					<a href="/productLine/productListperCateg/{{$product->productLine}}" class="collection__cover" >
						<img style="width: 100%;height: 100%;" src="/productlinesimage/{{$product -> image}}">
					</a>
					<div class="collection__meta">
						<h3 style="margin-top: 15px;" class="collection__name"> <a href="/productLine/productListperCateg/{{$product->productLine}}">{{$product -> productLine}}</a></h3>
					</div>
				</div>
			@endforeach
		</div>
		<button class="main__nav main__nav--prev" data-nav="#collections" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
		<button class="main__nav main__nav--next" data-nav="#collections" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
	</div>
</div>