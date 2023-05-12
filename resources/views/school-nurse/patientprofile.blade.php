@extends('layouts.default')

    @section('content')
    <div class="wrapper">
      <main role="main" class="main-content">

          <div class="col-md-12 my-4">
              <h2 class="h4 mb-1">Patient Profile </h2>
              {{-- <p class="mb-3">University of the Immaculate Conception</p> --}}
            
        
          <div class="row mt-5 align-items-center">
          <div class="col-md-3 text-center mb-5">
            <div class="avatar avatar-xl">
              <img class="uic-logo" src="{{asset('pics\uic-logo-small.png')}}" alt="uic-logo" class="avatar-img rounded-circle">
            </div>
          </div>
          <div class="col">
            <div class="row align-items-center">
              <div class="col-md-7">
                <h4 class="mb-1">Baron Zemo</h4>
                <p class="small mb-3"><span class="badge badge-dark">Mintal, Matina</span></p>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-7">
                <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at, pretium blandit sapien. </p>
              </div>
              <div class="col">
                <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                <p class="small mb-0 text-muted">(537) 315-1481</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-4">
          <div class="col-md-4">
            <div class="card mb-4 shadow">
              <div class="card-body my-n3">
                <div class="row align-items-center">
                  <div class="col-3 text-center">
                    <span class="circle circle-lg bg-light">
                      <i class="fe fe-user fe-24 text-primary"></i>
                    </span>
                  </div> <!-- .col -->
                  <div class="col">
                    <a href="#">
                      <h3 class="h5 mt-4 mb-1">Personal</h3>
                    </a>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus.</p>
                  </div> <!-- .col -->
                </div> <!-- .row -->
              </div> <!-- .card-body -->
              <div class="card-footer">
                <a href="" class="d-flex justify-content-between text-muted"><span>Account Settings</span><i class="fe fe-chevron-right"></i></a>
              </div> <!-- .card-footer -->
            </div> <!-- .card -->
          </div> <!-- .col-md-->
          <div class="col-md-4">
            <div class="card mb-4 shadow">
              <div class="card-body my-n3">
                <div class="row align-items-center">
                  <div class="col-3 text-center">
                    <span class="circle circle-lg bg-light">
                      <i class="fe fe-shield fe-24 text-primary"></i>
                    </span>
                  </div> <!-- .col -->
                  <div class="col">
                    <a href="#">
                      <h3 class="h5 mt-4 mb-1">Security</h3>
                    </a>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus.</p>
                  </div> <!-- .col -->
                </div> <!-- .row -->
              </div> <!-- .card-body -->
              <div class="card-footer">
                <a href="" class="d-flex justify-content-between text-muted"><span>Security Settings</span><i class="fe fe-chevron-right"></i></a>
              </div> <!-- .card-footer -->
            </div> <!-- .card -->
          </div> <!-- .col-md-->
   
          <div class="col-md-4">
            <div class="card mb-4 shadow">
              <div class="card-body my-n3">
                <div class="row align-items-center">
                  <div class="col-3 text-center">
                    <span class="circle circle-lg bg-light">
                      <i class="fe fe-shield fe-24 text-primary"></i>
                    </span>
                  </div> <!-- .col -->
                  <div class="col">
                    <a href="#">
                      <h3 class="h5 mt-4 mb-1">Security</h3>
                    </a>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus.</p>
                  </div> <!-- .col -->
                </div> <!-- .row -->
              </div> <!-- .card-body -->
              <div class="card-footer">
                <a href="" class="d-flex justify-content-between text-muted"><span>Security Settings</span><i class="fe fe-chevron-right"></i></a>
              </div> <!-- .card-footer -->
            </div> <!-- .card -->
          </div> <!-- .col-md-->
   
           
              @endsection