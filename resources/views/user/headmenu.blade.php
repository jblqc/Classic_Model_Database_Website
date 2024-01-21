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