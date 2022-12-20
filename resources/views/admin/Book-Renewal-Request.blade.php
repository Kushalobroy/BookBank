<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    

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
                <h3 class="page-title">Book Renewal Request's </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('Home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('Book-Renewal-Request') }}">Book Renewal Request</a> </li>
                  </ol>
                </nav>
              </div>
            <div class="row">
              <div class="col-lg-12 stretch-card">
                
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Book Renewal Request</h4>
                   
                    <div class="table-responsive">
                      <table id="example" class="table table-striped " style="width:100%">
                        <thead>
                            <tr>
                                <th> Sr. no.</th>
                                      <th> Book Name</th>
                                      <th>Image</th>
                                      <th> Writer Name</th>
                                      <th> Related Branch</th>
                                      <th> Requested By</th>
                                      <th> Grant/Revoke </th>
                              </tr>
                        </thead>
                        <tbody>
                       
                         
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
  </body>
</html>