@extends('layouts.default_2')

    @section('content')
    <div class="wrapper">
      <main role="main" class="main-content">

                <div class="col-md-12 my-4">
                    <h2 class="h4 mb-1">Search Student Records </h2>
                    <p class="mb-3">University of the Immaculate Conception</p>
                    <div class="card shadow">
                      <div class="card-body">
                        <div class="toolbar">
                          <form class="form">
                            <div class="form-row">

                              <div class="form-row">
                                <div class="form-group col">
                                  <label for="search" class="sr-only">Search</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" id="search1" value="" placeholder="Search">
                                    <div class="input-group-append">
                                      <button class="btn btn-primary" type="button" id="searchBtn">Search</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </form>
                              </div>


                      <!-- table -->
                      <table class="table datatables" id="dataTable-1">
                        <thead>
                          <tr>
                            <th></th>

                            <th class="w-25"><strong>ID number</strong></th>
                            <th class="w-25"><strong>Name</strong></th>
                            <th class="w-25"><strong>Department</strong></th>
                            <th class="w-25"><strong>Action</strong></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              {{-- <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label"></label>
                              </div> --}}
                            </td>
                            <td>190000000445</td>
                            <td>Baron Zemo</td>
                            <td>BSMT</td>

                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
								                <a class="dropdown-item" href="{{ route('clinlab_edit') }}">View Labtest Results</a>
                                <a class="dropdown-item" href="#">Delete</a>

                              </div>
                            </td>
                          </tr>
                        </table>
            @endsection
