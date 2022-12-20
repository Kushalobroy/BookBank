
<!DOCTYPE html>


<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.header')
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
                          
                          <h3 class="mb-0">{{$student}}</h3>
                         
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                         <a href="{{url('Students')}} "> <span class="mdi mdi-account-multiple icon-item"></a></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Students</h6>
                  </div>
                </div>
              </div>
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
                        <div class="icon icon-box-success">
                          <a href="{{url('updatedeletebook')}} "> <span class="mdi mdi-book-open-page-variant icon-item"></a></span>
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
                          <h3 class="mb-0">4000</h3>
                         
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <a href="{{ url('Issued-Books') }}"><span class="mdi mdi-check-all icon-item"></span></a>
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
                          <h3 class="mb-0">{{$pending}}</h3>
                         
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger ">
                         <a href="{{url('Book-Request')}}"><span class="mdi mdi-bell-ring icon-item"></span></a> 
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Pending Request's</h6>
                  </div>
                </div>
              </div>
            </div>
            
           
            <div class="row">
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">Messages From Student's</h4>
                      <p class="text-muted mb-1 small"> <a  href="{{url('/Messages')}} ">View all</a></p>
                    </div>
                    <div class="preview-list">
                      @foreach ($data as $data)
                    
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">{{$data->name}}</h6>
                              <p class="text-muted text-small">{{$data->created_at}}</p>
                            </div>
                            <p class="text-muted">{{$data->message}}</p>
                          </div>
                        </div>
                      </div>
                            
                      @endforeach
                      
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Student With Fine</h4>
                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                      <div class="item">
                        <img src="assets/images/dashboard/img1.jpeg" alt="">
                        <h6 class="preview-subject">Name: Kushal</h6>
                        <h6 class="preview-subject">Reg No. Y2013001</h6>
                        <h6 class="preview-subject">Year: 3</h6>
                        <h6 class="preview-subject">Branch: IT</h6>
                        <div><button class="btn btn-danger" value="View Profile">View Profile</button></div>

                      </div>
                      <div class="item">
                        <img src="assets/images/dashboard/img1.jpeg" alt="">
                        <h6 class="preview-subject">Name: Kushal</h6>
                        <h6 class="preview-subject">Reg No. Y2013001</h6>
                        <h6 class="preview-subject">Year: 3</h6>
                        <h6 class="preview-subject">Branch: IT</h6>
                        <div><button class="btn btn-danger" value="View Profile">View Profile</button></div>

                      </div>
                      <div class="item">
                        <img src="assets/images/dashboard/img1.jpeg" alt="">
                        <h6 class="preview-subject">Name: Kushal</h6>
                        <h6 class="preview-subject">Reg No. Y2013001</h6>
                        <h6 class="preview-subject">Year: 3</h6>
                        <h6 class="preview-subject">Branch: IT</h6>
                        <div><button class="btn btn-danger" value="View Profile">View Profile</button></div>

                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Send Message to all Student</h4>
                    <div class="add-items d-flex">
                      <input type="text" class="form-control todo-list-input" placeholder="Message">
                      <button class="add btn btn-primary todo-list-add-btn">Send</button>
                    </div>
                    <div class="list-wrapper">
                      <p class="text-muted">Recent</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
       @include('admin.footer')
  </body>
</html>
