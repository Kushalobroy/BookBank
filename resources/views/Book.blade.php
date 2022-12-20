<x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    </head>
  <body>
   
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
     
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
       
        <!-- partial -->
        <div class="main-panel">
          <div class="center">
            @if (session()->has('message'))
            
            <div class="alert alert-success" id="alert">
              
              {{session()->get('message')}}
            </div>
           
                
            @endif

          </div>
          <div class="content-wrapper">
            <div class="page-header">
               
            
              <div class="col-lg-12 stretch-card">
             
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Book's</h4>
                   
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> Sr. no.</th>
                            <th> Book Name </th>
                            <th>Image</th>
                            <th> Writer Name </th>
                            
                            <th> Related Branch</th>
                            <th>Book Request</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <form action="{{url('/requestbook')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        @foreach ($data as $data)
                         <tr class="table-info">
                            <td>{{$data->Serialno}}  </td>
                            <td>{{$data->B_name}} </td>
                            <td><img height="300" width="300" src="/bookimage/{{$data->image}}"></td>
                            <td> {{$data->W_name}} </td>
                          
                            <td> {{$data->R_Branch}}  </td>

                          <input type="number" name="B_id" id="" value="{{$data->id}}" hidden>
                         
                          <input type="number" name="u_id" id="" value="{{$data2->id}}" hidden>
                         
                            <td ><button type="submit" class="btn btn-primary">Request</button>   </td>
                            @endforeach
                        
                          </tr>
                        </form> 
                         
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
  </body>
</html> </x-app-layout>