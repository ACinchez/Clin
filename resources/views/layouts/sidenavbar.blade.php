@extends('layouts.default')
@section('sideNavBarScript')
<link rel="stylesheet" href="{{ asset('css\sidenavbar.css') }}">
<script src="{{ asset('js\sidenavbar.js') }}"></script>
@endsection
<div class="wrapper">
  <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <!-- header -->
      <div class="box">
        <div class="avatar">
        </div>        
        <div>
          <h1 id="name">random name</h1>
        <p id="school-rank">school nurse</p>
        </div>
      </div>
      
      
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item">
          <a href="{{ route('dashboard')}}" class="nav-link">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span>
            <span class="sr-only">(current)</span>
          </a>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-credit-card fe-16"></i>
            <span class="ml-3 item-text">Patient Management</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="forms">
            <li class="nav-item">
              <a href="{{ route('addpatient') }}" class="nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Add Patient</span>
              </a>
            </li>
          </ul>
          <ul class="collapse list-unstyled pl-4 w-100" id="forms">
            <li class="nav-item">
              <a href="{{ route('newconsultation') }}" class="nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">New Consultation</span>
              </a>
            </li>
          </ul>
          <ul class="collapse list-unstyled pl-4 w-100" id="forms">
            <li class="nav-item">
              <a href="{{ route('searchpatient') }}" class="nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Search Patient </span>
              </a>
            </li>
          </ul>
        </li>
        <ul class="collapse list-unstyled pl-4 w-100" id="forms">
          <li class="nav-item">
            <a href="{{ route('patientprofile') }}" class="nav-link">
            {{-- <a href="#" class="nav-link"> --}}
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Patient Profile </span>
            </a>
          </li>
        </ul>
      </li>
        <li class="nav-item dropdown">
          <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-grid fe-16"></i>
            <span class="ml-3 item-text">Medical Management</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="tables">
            <li class="nav-item">
              <a class="nav-link pl-3" href="/immunization"><span class="ml-1 item-text">Immunization</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="/disease"><span class="ml-1 item-text">Disease</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="/medicalrecords"><span class="ml-1 item-text">Medical Records</span></a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="btn-box w-100 mt-4 mb-1">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="btn mb-2 btn-primary btn-lg btn-block" type="submit">Logout</button>
      </form>
        </a>
      </div>
    </nav>
  </aside>
</div> <!-- .wrapper -->
@