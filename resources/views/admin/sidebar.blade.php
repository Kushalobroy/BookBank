<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/LMS1.png" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-category">
        <span class="nav-link">Home</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('Home') }}">
          <span class="menu-icon">
            <i class="mdi mdi-account-box-outline"></i>
          </span>
          <span class="menu-title"> Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-bell-ring"></i>
          </span>
          <span class="menu-title">Pending Request's</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">

            
            <li class="nav-item"> <a class="nav-link" href="{{url('Book-Renewal-Request')}}">Book renewal</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('Book-Request')}}">Book request</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('Book-Return-Request')}}">Book Return request</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('insertbook') }}">
          <span class="menu-icon">
            <i class="mdi mdi-grease-pencil"></i>
          </span>
          <span class="menu-title">Insert New Book</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('updatedeletebook')}} ">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Update/Delete Book's</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('Students')}}">
          <span class="menu-icon">
            <i class="mdi mdi-account-multiple icon-item"></i>
          </span>
          <span class="menu-title">Student's</span>
        </a>
      </li>


     
      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/icons/mdi.html">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">Student with Fine</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('Messages') }}">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">Messages</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('Issued-Books') }}">
          <span class="menu-icon">
            <i class="mdi mdi-check-all icon-item"></i>
          </span>
          <span class="menu-title">Issued Book</span>
        </a>
      </li>
    </ul>
  </nav>