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

        <!-- main content -->
        <main class="main">
            <div class="container">
                <div class="row row--grid">
                    <div class="col-12 col-xl-10 offset-xl-1">
                        <div class="article">
                            <!-- article content -->
                            <div class="article__content"><br>
                                <h1 style="text-align:center"><b>About Classic Models</b></h1><br><br>
                                <img src="{{url('img/avatars/aboutUs.jpg')}}"  alt=""> 

                                <div class="article__meta">
                                    <a href="{{url('/productLine/about')}}" class="article__category">Documentary</a>
                                    <span class="article__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM14.09814,9.63379,13,10.26807V7a1,1,0,0,0-2,0v5a1.00025,1.00025,0,0,0,1.5.86621l2.59814-1.5a1.00016,1.00016,0,1,0-1-1.73242Z"/></svg> 10.21.2022, 16:37</span>
                                </div>

                                <h1>About the Company</h1>
                                <p>We  provide customers with the most diverse selection of vehicle scale models, including Classic cars, Vintage cars, Planes, Ships, Motorcycles, Trains, Trucks, and Buses.</p>
                                <p>Unitok is dedicated to continuously improving the customer's collection experience of car models. Unitok makes sure that all models are complete replicas of classic and modern vehicles. Unitok offers various categories in which customers can choose from. All models come fully assembled and are ready to be displayed at home, office, gallery, and more. Additionally, most models include certificate fo authenticity.</p><br>

                                <h4>Why Choose Us?</h4>
                                <p><b> Attention to Details</b><br>
                                    It’s our attention to the small stuff, portraying the most realistic model is that makes us stand out from the rest. We are creative, while keeping a close eye on your preferences and your budget.</p>
                                <p><b> Creativity</b><br>
                                    We bring our diverse scale models of Classic cars, Vintage cars, Planes, Ships, Motorcycles, Trains, Trucks, and Buses. All models come fully assembled and ready for display in the home or office.</p>                        
                                <p><b> Prices</b><br>
                                    Our prices are competitive and fair. All of our models can be bought for a reasonable and affordable price. Any unexpected or additional expenses must be pre-approved by you. That’s how we would like to be treated, and that is how our customers are treated.</p><br>
                                
                                <h6>Get the Best Vehicle Models</h6>
                                <p>Listed below are the vehicle models we offer. Upgrade your collection and get yours now!.</p>
                                <ul>
                                    <li>Classic Cars</li>
                                    <li>Vintage Cars</li>
                                    <li>Motorcycles</li>
                                    <li>Planes</li>
                                    <li>Ships</li>
                                    <li>Trains</li>
                                    <li>Trucks & Buses</li>
                                </ul>
                            </div>
                            <!-- end article content -->

                            <!-- share -->
                            <div class="share" style="margin-bottom: 6%;">
                                <a href="#" class="share__link share__link--fb"><svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.56341 16.8197V8.65888H7.81615L8.11468 5.84663H5.56341L5.56724 4.43907C5.56724 3.70559 5.63693 3.31257 6.69042 3.31257H8.09873V0.5H5.84568C3.1394 0.5 2.18686 1.86425 2.18686 4.15848V5.84695H0.499939V8.6592H2.18686V16.8197H5.56341Z"/></svg> share</a>
                                <a href="#" class="share__link share__link--tw"><svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.55075 3.19219L7.58223 3.71122L7.05762 3.64767C5.14804 3.40404 3.47978 2.57782 2.06334 1.1902L1.37085 0.501686L1.19248 1.01013C0.814766 2.14353 1.05609 3.34048 1.843 4.14552C2.26269 4.5904 2.16826 4.65396 1.4443 4.38914C1.19248 4.3044 0.972149 4.24085 0.951164 4.27263C0.877719 4.34677 1.12953 5.31069 1.32888 5.69202C1.60168 6.22165 2.15777 6.74068 2.76631 7.04787L3.28043 7.2915L2.67188 7.30209C2.08432 7.30209 2.06334 7.31268 2.12629 7.53512C2.33613 8.22364 3.16502 8.95452 4.08833 9.2723L4.73884 9.49474L4.17227 9.8337C3.33289 10.321 2.34663 10.5964 1.36036 10.6175C0.888211 10.6281 0.5 10.6705 0.5 10.7023C0.5 10.8082 1.78005 11.4014 2.52499 11.6344C4.75983 12.3229 7.41435 12.0264 9.40787 10.8506C10.8243 10.0138 12.2408 8.35075 12.9018 6.74068C13.2585 5.88269 13.6152 4.315 13.6152 3.56293C13.6152 3.07567 13.6467 3.01212 14.2343 2.42953C14.5805 2.09056 14.9058 1.71983 14.9687 1.6139C15.0737 1.41264 15.0632 1.41264 14.5281 1.59272C13.6362 1.91049 13.5103 1.86812 13.951 1.39146C14.2762 1.0525 14.6645 0.438131 14.6645 0.258058C14.6645 0.22628 14.5071 0.279243 14.3287 0.374576C14.1398 0.480501 13.7202 0.639389 13.4054 0.734722L12.8388 0.914795L12.3247 0.565241C12.0414 0.374576 11.6427 0.162725 11.4329 0.0991699C10.8978 -0.0491255 10.0794 -0.0279404 9.59673 0.14154C8.2852 0.618204 7.45632 1.84694 7.55075 3.19219Z"/></svg> tweet</a>
                                <a href="#" class="share__link share__link--vk"><svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.78479 8.92255C8.78479 8.92255 9.07355 8.89106 9.22145 8.73512C9.35684 8.59224 9.35214 8.32262 9.35214 8.32262C9.35214 8.32262 9.33414 7.06361 9.92967 6.87771C10.5166 6.69489 11.2702 8.09524 12.07 8.63372C12.6741 9.04085 13.1327 8.95174 13.1327 8.95174L15.2699 8.92255C15.2699 8.92255 16.3874 8.85495 15.8576 7.99231C15.8137 7.92164 15.5485 7.35397 14.269 6.1879C12.9284 4.9673 13.1084 5.16472 14.7221 3.05305C15.705 1.76715 16.0978 0.982093 15.975 0.646407C15.8584 0.325317 15.1353 0.410582 15.1353 0.410582L12.7297 0.425177C12.7297 0.425177 12.5513 0.401365 12.419 0.478949C12.2899 0.554996 12.2061 0.732441 12.2061 0.732441C12.2061 0.732441 11.8258 1.72721 11.3179 2.57372C10.2466 4.35892 9.81855 4.4534 9.64326 4.34279C9.23554 4.08392 9.33727 3.30424 9.33727 2.75039C9.33727 1.01973 9.60491 0.298431 8.81687 0.111769C8.5555 0.0495478 8.36299 0.00883541 7.6939 0.00192196C6.83543 -0.00652779 6.10921 0.00499461 5.69758 0.202411C5.42369 0.333767 5.2124 0.627203 5.34152 0.644103C5.50038 0.664843 5.86036 0.739354 6.0513 0.994383C6.29781 1.32392 6.2892 2.06289 6.2892 2.06289C6.2892 2.06289 6.43084 4.10005 5.95818 4.35277C5.6342 4.52638 5.1897 4.17226 4.2342 2.55221C3.7451 1.7226 3.37573 0.805416 3.37573 0.805416C3.37573 0.805416 3.30451 0.634117 3.17696 0.541938C3.02279 0.430555 2.80759 0.395987 2.80759 0.395987L0.521729 0.410582C0.521729 0.410582 0.178185 0.4198 0.0521924 0.566519C-0.0597138 0.696338 0.0435842 0.965961 0.0435842 0.965961C0.0435842 0.965961 1.8333 5.07638 3.86013 7.1481C5.71871 9.04699 7.8285 8.92255 7.8285 8.92255H8.78479Z"/></svg> share</a>
                            </div>
                            <!-- end share -->
                            <hr>
                            <!-- DEVELOPERS -->
                            <h2 style="color: #fff;margin-top: 6%;font-size: 37px;">Developers</h2>
                            <div align="center" class="row" style="margin-top: 3%;">
								<div class="col-sm-4">
                                    <img style="width: 150px;height: 150px;" src="{{url('nics.jpg')}}">
                                    <h3 style="color: #fff;font-size: 18px;margin-top: 3%;">Baltazar, Nicole L.</h3>
								</div>
								<div class="col-sm-4">
                                    <img style="width: 150px;height: 150px;" src="{{url('hanz.png')}}">
                                    <h3 style="color: #fff;font-size: 18px;margin-top: 3%;">Bernabe, Hanz Angelo V.</h3>
                                </div>
                                <div class="col-sm-4">
                                    <img style="width: 150px;height: 150px;" src="{{url('mc.jpg')}}">
                                    <h3 style="color: #fff;font-size: 18px;margin-top: 3%;">Handog, Maria Christine C.</h3>
                                </div>
                            </div>
                            <div align="center" class="row" style="margin-top: 5%;">
								<div class="col-sm-6">
                                    <img style="width: 150px;height: 150px;" src="{{url('jen.png')}}">
                                    <h3 style="color: #fff;font-size: 18px;margin-top: 3%;">Lee, Jennefer B.</h3>
								</div>
								<div class="col-sm-6">
                                    <img style="width: 150px;height: 150px;" src="{{url('alex.png')}}">
                                    <h3 style="color: #fff;font-size: 18px;margin-top: 3%;">San Jose, Alexandra</h3>
                                </div>
                            </div>
                            <!-- END DEVELOPERS -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- end main content -->
        <hr>
        <!-- footer -->
        <div class="container" style="margin-top: 1%;">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-4 order-4 order-md-1 order-lg-4 order-xl-1 mt-5">
                    <a class="link" href="{{url('/')}}" style="color: #fff;font-weight: bolder;font-size: larger;">
                        Classic Models
                    </a>
                    <p class="footer__tagline">The schema is for Classic Models, <br> a retailer of scale models of <br>classic cars.</p>
                </div>

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

                <div class="col-6 col-md-4 col-lg-3 col-xl-2 order-2 order-lg-3 order-md-4 order-xl-3">
                    <h6 class="footer__title">Explore</h6>
                    <div class="footer__nav">
                        <a href="https://www.caranddriver.com/news/a41735199/ford-maverick-uhaul-rental/">News and Articles</a>
                        <a href="https://gomechanic.in/blog/top-10-best-selling-car-brands-car-sales-report-june-2022/">Top 10 Car Brands</a>
                        <a href="https://www.worldairlineawards.com/worlds-top-10-airlines-2022/">Top 10 World's Best Airlines</a>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3 col-xl-2 order-2 order-lg-3 order-md-4 order-xl-4">
                    <h6 class="footer__title">Community</h6>
                    <div class="footer__nav">
                        <a href="{{url('/productLine/about')}}">About Classic Models</a>
                        <a href="{{url('/productLine/about')}}">Our Team</a>
                        <a href="{{url('/productLine/about')}}">Join Us</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="footer__content">
                        <div class="footer__social" style="margin-bottom: 2%;">
                            <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.9,2H3.1A1.1,1.1,0,0,0,2,3.1V20.9A1.1,1.1,0,0,0,3.1,22h9.58V14.25h-2.6v-3h2.6V9a3.64,3.64,0,0,1,3.88-4,20.26,20.26,0,0,1,2.33.12v2.7H17.3c-1.26,0-1.5.6-1.5,1.47v1.93h3l-.39,3H15.8V22h5.1A1.1,1.1,0,0,0,22,20.9V3.1A1.1,1.1,0,0,0,20.9,2Z"/></svg></a>
                            <a href="#" target="_blank"><svg viewBox="0 0 18 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5507 0.0036464H11.5624L11.5612 0L11.5507 0.0036464ZM11.5108 0.0176323L11.5507 0.0036464H11.5252L11.5108 0.0176323ZM11.5039 0.0243315L11.5108 0.0176323L11.4917 0.0243072L11.5039 0.0243315ZM11.5039 0.0243315L11.2748 0.246719C13.8446 0.975936 15.088 2.11473 15.088 2.11473C13.4318 1.30287 11.9393 0.896938 10.4467 0.732864C9.36818 0.56879 8.28967 0.65508 7.37851 0.732864H7.13058C6.54793 0.732864 5.30826 0.975936 3.64711 1.62616C3.06818 1.87287 2.73595 2.03452 2.73595 2.03452C2.73595 2.03452 3.9781 0.816724 6.71529 0.166505L6.54793 0.00243113C6.54793 0.00243113 4.47521 -0.075352 2.2376 1.54594C2.2376 1.54594 0 5.36704 0 10.0778C0 10.0778 1.23967 12.1925 4.64008 12.2727C4.64008 12.2727 5.13595 11.6249 5.63802 11.0549C3.72893 10.4861 2.98512 9.34857 2.98512 9.34857C2.98512 9.34857 3.15124 9.42878 3.40041 9.59164H3.47479C3.50979 9.59164 3.52722 9.60778 3.54568 9.62487C3.54684 9.62595 3.548 9.62702 3.54917 9.6281V9.63539C3.56901 9.65484 3.58636 9.67185 3.62355 9.67185C3.6596 9.68642 3.69564 9.70096 3.73164 9.71548C4.10416 9.8658 4.47123 10.0139 4.77645 10.158C5.35413 10.4035 6.09669 10.6478 7.00785 10.8094C8.16074 10.9735 9.48223 11.0525 10.9872 10.8094L11.0353 10.7988L11.0353 10.7988C11.7631 10.6384 12.4908 10.4779 13.2186 10.1592C13.3516 10.0923 13.4931 10.0255 13.6419 9.95511C14.0339 9.76978 14.4769 9.56038 14.9504 9.26349C14.9504 9.26349 14.2066 10.4011 12.2169 10.9699C12.626 11.5362 13.2025 12.1852 13.2025 12.1852C15.9898 12.1255 17.3804 10.6948 17.8328 10.2295C17.9325 10.1269 17.9866 10.0713 18 10.0875C18 5.38405 15.75 1.55566 15.75 1.55566C13.7464 0.097178 11.8701 0.0257804 11.5039 0.0243315ZM6.13886 5.36701C7.00663 5.36701 7.70828 6.09623 7.70828 6.98952C7.70828 7.88889 7.00167 8.61811 6.1339 8.61811C5.26613 8.61811 4.55952 7.88889 4.55952 6.99682C4.55952 6.09745 5.26613 5.37066 6.1339 5.37066L6.13886 5.36701ZM11.7707 5.36701C12.6422 5.36701 13.3451 6.09623 13.3451 6.98952C13.3451 7.88889 12.6384 8.61811 11.7707 8.61811C10.9029 8.61811 10.1963 7.88889 10.1963 6.99682C10.1988 6.09745 10.9066 5.37066 11.7707 5.37066V5.36701Z"></path></svg></a>
                            <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z"/></svg></a>
                            <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z"/></svg></a>
                        </div>
                        <small style="margin-bottom: 2%;" class="footer__copyright">© Classic Models, 2022. Created by <a href="#" target="_blank">Baltazar-Bernabe-Handog-Lee-SanJose</a>.</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->

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
