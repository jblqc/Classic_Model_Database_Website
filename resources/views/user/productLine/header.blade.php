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
                    @foreach ($products as $product)
                        <a href="/productLine/productListperCateg/{{$product -> productLine}}">{{$product -> productLine}}</a>
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
<!-- end header -->
