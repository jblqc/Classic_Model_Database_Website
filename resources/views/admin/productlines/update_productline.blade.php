<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.files.css')

    <style>
      label{
        font-size: 20px;
        margin-bottom: 10px;
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
                      <div align="center" class="alert alert-danger">There is already an existing Product Code.</div>
                    @endif

                    <form action="{{url('editproductline', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div>
                        <h1 style="font-size: 25px;text-align: center;">Update {{$data->productLine}}</h1> 
                        <hr style="margin-top: 15px; height:3px;"><br>
                        <div class="container"style="margin-left: 20%;">
                          <div>
                            <label for="productLine" style="align-self: flex-start;">Product Line</label>
                            <input value="{{$data->productLine}}" type="text" class="form-control" required="" name="productLine" style="width: 500px;background-color: white;color:#000;margin-bottom: 20px;">
                          </div>
                          <div style="margin-top: 30px;">
                            <label for="textDescription">Text Description</label>
                            <textarea class="form-control" rows="5" required="" name="textDescription" style="background-color: white;color:#000;margin-bottom: 20px;width:500px;">{{$data->textDescription}}</textarea>
                          </div>
                          <div style="margin-top: 30px;">
                            <label for="htmlDescription">HTML Description</label>
                            <textarea class="form-control" rows="5" required="" name="htmlDescription" style="background-color: white;color:#000;margin-bottom: 20px;width:500px;">{{$data->htmlDescription}}</textarea>
                          </div>
                          <div style="margin-top: 30px;">
                            <label for="image">Old Product Category Image</label><br>
                            <img height="300" width="300" src="/productlinesimage/{{$data->image}}" alt="">
                          </div>
                          <div style="margin-top: 30px;">
                            <label for="image">Change Product Category Image</label><br>
                            <input required="" type="file" name="image" style="color:#fff;width: fit-content;">
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