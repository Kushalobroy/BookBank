<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--table Quries End-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
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
                <h3 class="page-title">  Book's </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('Home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('updatedeletebook') }}">Update Delete Book</a>  </li>
                  </ol>
                </nav>
              </div>
            <div class="row">

              <div>
                @if (session()->has('message'))
                
                <div class="alert alert-success" id="alert">
                  
                  {{session()->get('message')}}
                </div>
               
                    
                @endif

              </div>

              <div class="col-lg-12 stretch-card">
                
                <div class="card">
                  <div class="card-body">
              
                   
                    <div class="table-responsive">
                      <table id="example" class="table table-striped " style="width:100%">
                        <thead>
                          <tr>
                            <th> Sr. no.</th>
                            <th> Book Name</th>
                            <th>Image</th>
                            <th> Writer Name</th>
                            <th> Related Branch</th>
                            <th> Update </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $data)
                            
                       
                        <tr class="table-info">
                          <td>{{$data->Serialno}}  </td>
                          <td>{{$data->B_name}} </td>
                          <td><img height="300" width="300" src="/bookimage/{{$data->image}}"></td>
                          <td> {{$data->W_name}} </td>
                          <td> {{$data->R_Branch}}  </td>
                          <td ><a class="btn btn-danger" href="{{url('/deletebook', $data->id)}} ">Delete</a></td>
                          <td><a class="btn btn-primary" href="{{url('/updateview', $data->id)}} ">Update</a></td>
                        
                        </tr>
                          @endforeach
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
      @include('admin.footer')
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script>
    $(document).ready(function () {
      $('#example').DataTable();
  });</script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>



<script>

  $(document).ready(function(){

    setTimeout(function(){
      $("div.alert").remove();
    },3000);
  });
</script>

  </body>
</html>






