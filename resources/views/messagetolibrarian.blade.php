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
              <div class="content-wrapper">
                <div class="page-header">
                  <h3 class="page-title"> Message To Librarian </h3>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('messagetolibrarian') }}">Message To Librarian</a> </li>
                    </ol>
                  </nav>
                </div>
                <div class="row">
                  
                  <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Fill This Form</h4>
                       
                        <form class="forms-sample" action="{{url('/message')}} " method="post" enctype="multipart/form-data">
                            @csrf
                          
                          <div class="form-group">
                            <label for="exampleInputPassword4">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword4">Message</label>
                            <textarea class="form-control" name="message"  cols="30" rows="10" placeholder="Type Here"> </textarea>
                            
                          </div>
                         
                        
                          <button type="submit" class="btn btn-primary me-2" >Submit</button>
                          <button class="btn btn-dark">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>
                 
              </div>
              <!-- content-wrapper ends -->
              <!-- partial:../../partials/_footer.html -->
              @include('admin.footer')
        <!-- End custom js for this page -->
      </body>
    </html>
</x-app-layout>