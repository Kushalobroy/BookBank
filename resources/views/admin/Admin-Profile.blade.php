<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')


    <!--table Quries End-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
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
                        <h3 class="page-title"> Admin </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('Home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="{{ url('Admin-Profile') }}">{{$data->name}}</a> </li>
                                
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Student profile</h4>
                                    <form class="form-sample">
                                        <p class="card-description"> Profile Photo</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <img class="" src="assets/images/faces/face15.jpg" height="200" width="50" style="border-radius: 50%" alt="">

                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <table class="table table-responsive">
                                                    <tr>
                                                        <td>Name</td>
                                                        <td>{{ $data->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Branch</td>
                                                        <td>{{ $data->branch }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Reg. No.</td>
                                                        <td>{{ $data->regno}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Year</td>
                                                        <td>{{ $data->year }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobile No.</td>
                                                        <td>{{ $data->m_number}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email Id</td>
                                                        <td>{{ $data->email }}</td>
                                                    </tr>
                                                </table>
                                                
                                            </div>
                                            <ul >
                                                <li><a class="btn btn-primary" href="{{url('/Update-Password')}} ">Update Password</a>
                                                <a href=""><button class="btn btn-danger">Delete Account</button></a>
                                                <a href=""><button class="btn btn-success">Two Facter Authentication</button></a>
                                                <a href=""><button class="btn btn-primary">Active Browser Sessions</button></a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                </div>

                            </div>
                        </div>
                       
                            
                        
                        </form>

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
    <!-- partial:../../partials/_footer.html -->
    @include('admin.footer')
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->

</body>

</html>
