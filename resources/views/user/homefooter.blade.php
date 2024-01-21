<div class="col-12 col-md-8 col-lg-6 col-xl-4 order-3 order-lg-2 order-md-3 order-xl-1">
    <div class="row">
        <div class="col-12">
            <h6 class="footer__title">Marketplace</h6>
        </div>
        <div class="col-6">
            <div class="footer__nav">
                @foreach ($footer as $foot)
                    <a href="/productLine/productListperCateg/{{$foot -> productLine}} ">{{$foot -> productLine}}</a>
                @endforeach
            </div>
        </div>

        <div class="col-6">
			<div class="footer__nav">
                @foreach ($footertwo as $foottwo)
                    <a href="/productLine/productListperCateg/{{$foottwo -> productLine}} ">{{$foottwo -> productLine}}</a>
                @endforeach
            </div>
		</div>
    </div>
</div>