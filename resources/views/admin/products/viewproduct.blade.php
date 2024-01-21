<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.files.css')

    <style>
      label{
        font-size: 20px;
      }
      .col-25 {
        float: left;
        width: 25%;
        margin-top: 10px;
        margin-bottom: 10px;
      }

      .col-75 {
        float: left;
        width: 75%;
        margin-top: 10px;
        margin-bottom: 10px;
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      p{
        font-size: 18px;
        text-align: justify;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.files.sidebar')
      
      <!-- partial -->
      @include('admin.files.navbar')


        <!-- partial -->
        
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="d-flex flex-column">
              <div class="d-flex justify-content-center">
                <div class="card" style="width: 100%;padding: 30px;">
                  <a style="color: #fff;" class="nav-link" href="{{ redirect()->getUrlGenerator()->previous() }}">
                    <i class="icon-md mdi mdi-arrow-left-thick"></i>
                  </a>
                  <div class="card-body">
                    @if(session()->has('message'))
                      <div align="center" class="alert alert-success" role="alert">
                        {{session()->get('message')}}
                      </div>
                    @endif

                    @if (session('error'))
                      <div align="center" class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                      <div>
                        <h1 style="font-size: 25px;text-align: center;">View - {{$data->productName}}</h1> 
                        <hr style="margin-top: 15px; height:3px;"><br>
                        <div class="container">
                          <div class="row">
                            <div class="col-25">
                              <label>Product Code</label>
                            </div>
                            <div class="col-75">
                              <p>{{$data->productCode}}</p>
                            </div>
                          </div><hr>
                          <div class="row">
                            <div class="col-25">
                              <label>Product Name</label>
                            </div>
                            <div class="col-75">
                            <p>{{$data->productName}}</p>
                            </div>
                          </div><hr>
                          <div class="row">
                            <div class="col-25">
                              <label>Product Category</label>
                            </div>
                            <div class="col-75">
                            <p>{{$data->productLine}}</p>
                            </div>
                          </div><hr>
                          <div class="row">
                            <div class="col-25">
                              <label>Product Scale</label>
                            </div>
                            <div class="col-75">
                                <p>{{$data->productScale}}</p>
                            </div>
                          </div><hr>
                          <div class="row">
                            <div class="col-25">
                              <label>Product Vendor</label>
                            </div>
                            <div class="col-75">
                                <p>{{$data->productVendor}}</p>
                            </div>
                          </div><hr>
                          <div class="row">
                            <div class="col-25">
                              <label>Product Description</label>
                            </div>
                            <div class="col-75">
                                <p>{{$data->productDescription}}</p>
                            </div>
                          </div><hr>
                          <div class="row">
                            <div class="col-25">
                              <label>Stock</label>
                            </div>
                            <div class="col-75">
                            <p>{{$data->quantityInStock}}</p>
                            </div>
                          </div><hr>
                          <div class="row">
                            <div class="col-25">
                              <label>Buy Price</label>
                            </div>
                            <div class="col-75">
                                <p>{{$data->buyPrice}}</p>
                            </div>
                          </div><hr>
                          <div class="row">
                            <div class="col-25">
                              <label>MSRP</label>
                            </div>
                            <div class="col-75">
                                <p>{{$data->MSRP}}</p>
                            </div>
                          </div><hr>
                          <div class="row">
                            <div class="col-25">
                              <label for="image">Product Image</label><br>
                            </div>
                            <div class="col-75">
                              <img height="300" width="300" src="/productsimage/{{$data->image}}" alt="">
                            </div>
                          </div><hr>
                        </div>
                      </div>             
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
        @include('admin.files.script')
    <!-- End custom js for this page -->
  </body>
</html>