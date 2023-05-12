@extends('layouts.default')
@section('sideNavBarScript')
<link rel="stylesheet" href="{{asset('css\sidenavbar.css')}}">
<script src="{{ asset('public\js\sidenavbar.js') }}"></script>


<div class="wrapper">
  <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
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
          <a href="{{ route('addPatient')}}" class="nav-link">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Add Patient</span>
            <span class="sr-only">(current)</span>
          </a>
          <a href="{{ route('labdashboard')}}" class="nav-link">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Search Patient</span>
            <span class="sr-only">(current)</span>
          </a>
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
@endsection
