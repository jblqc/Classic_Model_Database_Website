<style>
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color:rgb(0,0,128);opacity:0.6;
  color: white;
  cursor: pointer;
  padding: 8px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html">Classic Models | ADMIN</a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            
            <ul class="navbar-nav navbar-nav-right">
              
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-arrow-up-thick"></i>
                </a>
              </li>
              
                <x-app-layout>
                </x-app-layout>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>

        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="icon-md mdi mdi-arrow-up-thick"></span></button>

        <script>
          let mybutton = document.getElementById("myBtn");

          window.onscroll = function() {scrollFunction()};

          function scrollFunction() {
            if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
              mybutton.style.display = "block";
            } else {
              mybutton.style.display = "none";
            }
          }

          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
        </script>