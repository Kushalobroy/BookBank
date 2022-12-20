<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Insert Book </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('Home') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('insertbook') }}">Insert New Book</a> </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="center">
                @if (session()->has('message'))
                
                <div class="alert alert-success" id="alert">
                  
                  {{session()->get('message')}}
                </div>
               
                    
                @endif

              </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                   
                    <form class="forms-sample" action="{{url('/uploadbook')}} " method="post" enctype="multipart/form-data">
                        @csrf

                     

                      <div class="form-group">
                        <label for="exampleInputName1">ISBN No,</label>
                        <input type="number" min="0" class="form-control" name="IsbnNo" placeholder="IsbnNo">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Serial No.</label>
                        <input type="number" min="0"  class="form-control" name="Serialno" placeholder="Serial No">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Book Name</label>
                        <input type="text" class="form-control" name="B_name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Writer Name</label>
                        <input type="text" class="form-control" name="W_name" placeholder="Writer Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Related Branch</label>
                        <select class="form-control" name="R_Branch">
                          <option value="-1">Select</option>
                          <option value="IT">IT</option>
                          <option value="CE">CE</option>
                          <option value="ME">ME</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Book Image</label>
                       
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info"  placeholder="Upload Image" name="image">
                         
                        </div>
                      </div>
                    
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             
          </div>
          <!-- content-wrapper ends -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          
          <!-- partial:../../partials/_footer.html -->
          @include('admin.footer')
    <!-- End custom js for this page -->
<!--alert-->

<script>

  $(document).ready(function(){

    setTimeout(function(){
      $("div.alert").remove();
    },3000);
  });
</script>
<!--close alert-->

  </body>
</html>