<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Corona Admin</title>
<!-- plugins:css -->
<link rel="stylesheet" href="/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="/admin/assets/vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="/admin/assets/vendors/jvectormap/jquery-jvectormap.css">
<link rel="stylesheet" href="/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
<link rel="stylesheet" href="/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<!-- endinject -->
<!-- Layout styles -->
<link rel="stylesheet" href="/admin/assets/css/style.css">
<!-- End layout styles -->
<link rel="shortcut icon" href="/admin/assets/images/favicon.png" />
@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
        td{
           font-size: 12px; 
        }
        tr:nth-child(even) {
            background-color: #000;
        }
        tr:nth-child(odd) {
            background-color: #191f45;
        }
        tr:hover {background-color: #5c6494;}
        th{
          font-size: 15px;
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
                  <div class="card-body"  align="center">
                        @if(session()->has('message'))
                            <div align="center" class="alert alert-success" role="alert">
                                {{session()->get('message')}}
                            </div>
                        @endif
                        @if (session('error'))
                          <div align="center" class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        @foreach($data->take(1) as $products)
                        <h1 style="font-size:25px;text-align:center;margin-bottom:15px;">Products Per {{$products->productLine}}</h1>
                        @endforeach
                        <a style="background-color:#191f45;" class="btn btn-primary" href="{{url('/products/add_products_view')}}">
                            <span class="menu-icon">
                                <i class="mdi mdi-plus-circle"></i>
                                <i>Add New Product</i>
                            </span>
                        </a>
                        <hr style="margin-top: 15px; height:3px;"><br>
                        
                        <div align="center">
                        <table border="1px">
                                <tr align="center">
                                    <th style="padding:10px;">Product Code</th>
                                    <th style="padding:10px;">Name</th>
                                    <th style="padding:10px;">Product Category</th>
                                    <th style="padding:10px;">Scale</th>
                                    <th style="padding:10px;">Vendor</th>
                                    <th style="padding:10px;">Description</th>
                                    <th style="padding:10px;">Stock</th>
                                    <th style="padding:10px;">Buy Price</th>
                                    <th style="padding:10px;">MSRP</th>
                                    <th style="padding:10px;">Image</th>
                                    <th style="padding:10px;">Action</th>
                                </tr>

                                @foreach($data as $products)
                                <tr>
                                    <td style="padding:0px 20px 0px;" align="center">{{$products->productCode}}</td>
                                    <td style="padding:20px 20px 20px;" align="justify">{{$products->productName}}</td>
                                    <td style="padding:20px 20px 20px;" align="justify">{{$products->productLine}}</td>
                                    <td style="padding:20px 20px 20px;" align="justify">{{$products->productScale}}</td>
                                    <td style="padding:20px 20px 20px;" align="justify">{{$products->productVendor}}</td>
                                    <td style="padding:20px 20px 20px;" align="justify">{{$products->productDescription}}</td>
                                    <td style="padding:20px 20px 20px;" align="justify">{{$products->quantityInStock}}</td>
                                    <td style="padding:20px 20px 20px;" align="justify">{{$products->buyPrice}}</td>
                                    <td style="padding:20px 20px 20px;" align="justify">{{$products->MSRP}}</td>
                                    <td style="padding:0px 20px 0px;"><img height="100" width="100" src="/productsimage/{{$products->image}}"></td>
                                    <td style="padding:0px 20px 0px;" align="center">
                                      <a title="See Product Details" style="margin-bottom: 5px;" class="btn btn-warning" href="{{url('/products/viewproduct', $products->id)}}">
                                        <span class="menu-icon">
                                          <i class="mdi mdi-eye"></i>
                                        </span>
                                      </a><br>
                                      <a title="Edit Product" style="margin-bottom: 5px;" class="btn btn-primary" href="{{url('/products/updateproduct', $products->id)}}">
                                        <span class="menu-icon">
                                          <i class="mdi mdi-pencil"></i>
                                        </span>
                                      </a><br>
                                      <a title="Delete Product" onclick="return confirm('Are you sure you want to delete the Product?')" class="btn btn-danger" href="{{url('/products/deleteproduct', $products->productCode)}}">
                                        <span class="menu-icon">
                                          <i class="mdi mdi-delete"></i>
                                        </span>
                                      </a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="/admin/assets/vendors/chart.js/Chart.min.js"></script>
<script src="/admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="/admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="/admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/admin/assets/js/off-canvas.js"></script>
<script src="/admin/assets/js/hoverable-collapse.js"></script>
<script src="/admin/assets/js/misc.js"></script>
<script src="/admin/assets/js/settings.js"></script>
<script src="/admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="/admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>