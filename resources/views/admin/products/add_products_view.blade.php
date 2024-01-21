<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.files.css')

    <style>
      label{
        font-size: 20px;
        margin-bottom: 10px;
      }
      .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
      }

      .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
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
                <div class="card" style="width: 85%;padding: 30px;">
                  <div class="card-body">
                    @if(session()->has('message'))
                      <div align="center" class="alert alert-success" role="alert">
                        {{session()->get('message')}}
                      </div>
                    @endif

                    @if (session('error'))
                      <div align="center" class="alert alert-danger">There is already an existing ID or Product Code.</div>
                    @endif

                    <form action="{{url('upload_products')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div>
                        <h1 style="font-size: 25px;text-align: center;">Add a New Product</h1> 
                        <hr style="margin-top: 15px; height:3px;"><br>
                        <div class="container">
                          <div class="row">
                            <div class="col-25">
                              <label>Product ID</label>
                            </div>
                            <div class="col-75">
                              <input type="text" required="" name="id" style="width: 500px;background-color: white;color:#000;margin-bottom: 20px;">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label>Product Code</label>
                            </div>
                            <div class="col-75">
                              <input type="text" required="" name="productCode" style="width: 500px;background-color: white;color:#000;margin-bottom: 20px;">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label>Product Name</label>
                            </div>
                            <div class="col-75">
                              <input type="text" required="" name="productName" style="width: 500px;background-color: white;color:#000;margin-bottom: 20px;">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label>Product Category</label>
                            </div>
                            <div class="col-75">
                              <select name="productLine" style="color: #000;margin-bottom: 20px;width:500px;text-align: center;">
                                <option value="">-- Select a Category --</option>
                                @foreach($data as $productlines)
                                  <option value="{{$productlines->productLine}}">{{$productlines->productLine}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label>Product Scale</label>
                            </div>
                            <div class="col-75">
                              <input type="text" required="" name="productScale" style="width: 500px;background-color: white;color:#000;margin-bottom: 20px;">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label>Product Vendor</label>
                            </div>
                            <div class="col-75">
                              <input type="text" required="" name="productVendor" style="width: 500px;background-color: white;color:#000;margin-bottom: 20px;">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label>Product Description</label>
                            </div>
                            <div class="col-75">
                              <textarea rows="5" required="" name="productDescription" style="background-color: white;color:#000;margin-bottom: 20px;width:500px;"></textarea>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label>Stock</label>  
                            </div>
                            <div class="col-75">
                              <input type="text" required="" name="quantityInStock" style="width: 500px;background-color: white;color:#000;margin-bottom: 20px;">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label>Buy Price</label>
                            </div>
                            <div class="col-75">
                              <input type="text" required="" name="buyPrice" style="width: 500px;background-color: white;color:#000;margin-bottom: 20px;">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label>MSRP</label>
                            </div>
                            <div class="col-75">
                              <input type="text" required="" name="MSRP" style="width: 500px;background-color: white;color:#000;margin-bottom: 20px;">
                            </div>
                          </div>
                          <div class="row" style="margin-top: 30px;">
                            <div class="col-25">
                              <label>Product Category Image</label><br>
                            </div>
                            <div class="col-75">
                              <input required="" type="file" name="image" style="color:#fff;width: fit-content;">
                            </div>
                          </div>
                        </div>
                        <div style="margin-top: 40px;" align="center">
                          <input type="submit" class="btn" placeholder="" name="image" style="color:#fff;background-color:#191f45;padding: 15px;width:300px;">
                        </div>
                      </div>
                    </form>                    
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