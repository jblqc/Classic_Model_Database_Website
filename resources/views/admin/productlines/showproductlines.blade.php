<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.files.css')
    <style>
        td{
           font-size: 15px; 
        }
        tr:nth-child(even) {
            background-color: #000;
        }
        tr:nth-child(odd) {
            background-color: #191f45;
        }
        tr:hover {background-color: #5c6494;}
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
                            <div align="center" class="alert alert-danger">You cannot delete this product category because it contains other products.</div>
                        @endif
                        <h1 style="font-size:25px;text-align:center;margin-bottom:15px;">Product Categories</h1>
                        <a style="background-color:#191f45;" class="btn btn-primary" href="{{url('/productlines/add_productlines_view')}}">
                            <span class="menu-icon">
                                <i class="mdi mdi-plus-circle"></i>
                                <i>Add Product Category</i>
                            </span>
                        </a>
                        <hr style="margin-top: 15px; height:3px;"><br>
                        
                        <div align="center">
                            <table border="1px">
                                <tr align="center">
                                    <th style="padding:10px;">Product Category</th>
                                    <th style="padding:10px;">Text Description</th>
                                    <th style="padding:10px;">HTML Description</th>
                                    <th style="padding:10px;">Image</th>
                                    <th style="padding:10px;">Action</th>
                                </tr>

                                @foreach($data as $productlines)
                                <tr>
                                    <td style="padding:0px 20px 0px;" align="center">{{$productlines->productLine}}</td>
                                    <td style="padding:20px 20px 20px;" align="justify">{{$productlines->textDescription}}</td>
                                    <td style="padding:20px 20px 20px;" align="justify">{{$productlines->htmlDescription}}</td>
                                    <td style="padding:0px 20px 0px;"><img style="width: 700px;" src="/productlinesimage/{{$productlines->image}}"></td>
                                    <td style="padding:0px 20px 0px;" align="center">
                                        <a title="See Products" style="margin-bottom: 5px;" class="btn btn-warning" href="{{url('/productlines/showprodpercateg', $productlines->productLine)}}">
                                            <span class="menu-icon">
                                                <i class="mdi mdi-eye"></i>
                                            </span>
                                        </a>
                                        <a title="Edit Product Line" style="margin-bottom: 5px;" class="btn btn-primary" href="{{url('/productlines/updateproductline', $productlines->id)}}">
                                            <span class="menu-icon">
                                                <i class="mdi mdi-pencil"></i>
                                            </span>
                                        </a>
                                        <a title="Delete Product Line" onclick="return confirm('Are you sure you want to delete the Product Category?')" class="btn btn-danger" href="{{url('/productlines/deleteproductline', $productlines->productLine)}}">
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
        @include('admin.files.script')
    <!-- End custom js for this page -->
  </body>
</html>
