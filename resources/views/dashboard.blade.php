<x-app-layout>
    <!DOCTYPE html>


    <html lang="en">
      <head>
        <!-- Required meta tags -->
       @include('admin.css')
      </head>
      <body>
        <div class="container-scroller">
         
          <!-- partial:partials/_sidebar.html -->
    
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
         
            <!-- partial -->
            <div class="main-panel">
              <div class="content-wrapper">
                <div class="row">
                  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <h3 class="mb-0">{{$book}}</h3>
                             
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="icon icon-box-success ">
                             <a href="{{ url('Books') }} "> <span class="mdi mdi-book-open-page-variant icon-item"></a></span>
                            </div>
                          </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total Books</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <h3 class="mb-0">Closed</h3>
                            
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="icon icon-box-success">
                              <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                          </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Library Status</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <h3 class="mb-0">5</h3>
                             
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="icon icon-box-success">
                              <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                          </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Issued Book</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <h3 class="mb-0">0</h3>
                             
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="icon icon-box-danger ">
                              <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                            </div>
                          </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Message's</h6>
                      </div>
                    </div>
                  </div>
                </div>
                
                @include('admin.footer')
            </body>
          </html>    
</x-app-layout>
