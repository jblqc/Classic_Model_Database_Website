<div class="col-12">
	<!-- tabs content -->
	<div class="tab-content">
		<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
			<div class="row row--grid">
				@foreach  ($categories as  $categ)
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<!-- CARD1 -->
						<div class="card">
							<a href="/productLine/specific/{{$categ->productCode}}" class="card__cover">
								<img style="height: 300px;width: 260px;" src="/productsimage/{{$categ -> image}}">
							</a>
							<h3 class="card__title"><a href="/productLine/specific/{{$categ->productCode}}">{{$categ->productName}}</a></h3>			
							<div class="card__price">										
								<span>{{$categ->productVendor}}</span>	
							</div>
							<div class="card__info">
								<div class="card__price">
									<span>Price</span>
									<span>{{$categ->buyPrice}}</span>
								</div>

								<button class="card__likes" type="button">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z" /></svg>
									<span>Stock: {{$categ->quantityInStock}}</span>
								</button>
							</div>
						</div>
					</div>
				@endforeach

				@foreach  ($categories2 as  $categ2)
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<!-- CARD1 -->
						<div class="card">
							<a href="/productLine/specific/{{$categ2->productCode}}" class="card__cover">
								<img style="height: 300px;width: 260px;" src="/productsimage/{{$categ2 -> image}}"><!--NOT SURE SA FOLDER LOCATION!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
							</a>
							<h3 class="card__title"><a href="/productLine/specific/{{$categ2->productCode}}">{{$categ2->productName}}</a></h3>
										
							<div class="card__price">										
								<span>{{$categ2->productVendor}}</span>	
							</div>
							<div class="card__info">
								<div class="card__price">
									<span>Price</span>
									<span>{{$categ2->buyPrice}}</span>
								</div>
								<button class="card__likes" type="button">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z" /></svg>
									<span>Stock: {{$categ2->quantityInStock}}</span>
								</button>
							</div>
						</div>
					</div>
				@endforeach

				@foreach  ($categories3 as  $categ3)
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<!-- CARD1 -->
						<div class="card">
							<a href="/productLine/specific/{{$categ3->productCode}}" class="card__cover">
								<img style="height: 300px;width: 260px;" src="/productsimage/{{$categ3 -> image}}"><!--NOT SURE SA FOLDER LOCATION!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
							</a>
							<h3 class="card__title"><a href="/productLine/specific/{{$categ3->productCode}}">{{$categ3->productName}}</a></h3>										
							<div class="card__price">										
								<span>{{$categ3->productVendor}}</span>	
							</div>
							<div class="card__info">
								<div class="card__price">
									<span>Price</span>
									<span>{{$categ3->buyPrice}}</span>
								</div>
								<button class="card__likes" type="button">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z" /></svg>
									<span>Stock: {{$categ3->quantityInStock}}</span>
								</button>
							</div>
						</div>
					</div>
				@endforeach

				@foreach  ($categories4 as  $categ4)
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<!-- CARD1 -->
						<div class="card">
							<a href="/productLine/specific/{{$categ4->productCode}}" class="card__cover">
								<img style="height: 300px;width: 260px;" src="/productsimage/{{$categ4 -> image}}"><!--NOT SURE SA FOLDER LOCATION!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
							</a>
							<h3 class="card__title"><a href="/productLine/specific/{{$categ4->productCode}}">{{$categ4->productName}}</a></h3>									
							<div class="card__price">										
								<span>{{$categ4->productVendor}}</span>	
							</div>
							<div class="card__info">
								<div class="card__price">
									<span>Price</span>
									<span>{{$categ4->buyPrice}}</span>
								</div>
								<button class="card__likes" type="button">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z" /></svg>
									<span>Stock: {{$categ4->quantityInStock}}</span>
								</button>
							</div>
						</div>
					</div>
					<!-- end CARD1 -->
				@endforeach
			</div>
		</div>
	</div>
</div>