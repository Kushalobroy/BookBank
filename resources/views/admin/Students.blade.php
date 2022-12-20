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
                <h3 class="page-title">Student's </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('Home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('Students') }}">Student's</a> </li>
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
              <div class="col-lg-12 stretch-card">
                
                <div class="card">
                  <div class="card-body">
                   
                   
                    <div class="table-responsive">
                      <table id="example" class="table table-striped " style="width:100%">
                        <thead>
                            <tr>
                               <th>Sr. No</th>
                               <th>Name</th>
                               <th>Branch</th>
                               <th>Year</th>
                                <th>Email</th>
                                <th>Issued Book</th>
                                <th align="center">Action</th>
                            
                              </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $data)
                              
                         
                          <tr>
                            <td>{{$data->id}}  </td>
                            <td>{{$data->name}} </td>
                            <td>{{$data->branch}} </td>
                            <td>{{$data->year}} </td>
                            <td> {{$data->email}} </td>
                            <td> 0 </td>
                         
                            <td><a class="btn btn-primary" href="{{url('/StudentProfile',$data->id)}}"> View Profile </a> <a class="btn btn-danger" href="{{url('/DeleteUser',$data->id)}}">Delete Student</a></td>
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
    <script>

      $(document).ready(function(){
    
        setTimeout(function(){
          $("div.alert").remove();
        },3000);
      });
    </script>
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script>
    $(document).ready(function () {
      $('#example').DataTable();
  });</script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  </body>
</html>







