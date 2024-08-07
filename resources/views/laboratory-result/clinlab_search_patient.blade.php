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
                          <form class="form" action="/search_patient" method="POST">
                            @csrf
                            <div class="form-row">

                              <div class="form-row">
                                <div class="form-group col">
                                  <label for="search" class="sr-only">Search</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" id="search1" value="" placeholder="Search" name="keyword">
                                    <div class="input-group-append">
                                      <input type="submit"  class="btn btn-primary" type="button" id="searchBtn" value="Search"/>
                                      {{-- <button class="btn btn-primary" type="button" id="searchBtn">Search</button> --}}
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

                            {{-- <th class="w-25"><strong>ID number</strong></th> --}}
                            <th class="w-25"><strong>Name</strong></th>
                            <th class="w-25"><strong>Department</strong></th>
                            <th class="w-25"><strong>Action</strong></th>
                          </tr>
                        </thead>
                        <tbody>
                          {{Auth()->user()}}
                              {{-- {{ $result }} --}}
                              {{-- {{ $results }} --}}
                              @foreach ($results as $list)
                              <tr>
                                <td>
                                  {{ $list->lastname . ', ' . $list->firstname }}
                                </td>
                                <td>
                                  <a href="##/{{ $list->patient_id }}">View Medical History</a>
                                </td>
                              </tr>
                              @endforeach


                          {{-- {{$results['lastname']}} --}}
                          {{-- @foreach ($result as $list)
                            {{ $list->lastname }}
                          @endforeach --}}
                          {{-- {{$results['lastname']}} --}}
                          {{-- @foreach ($results as $list)
                            {{ $list->lastname; }}
                          @endforeach --}}
                          {{-- <tr>
                            <td>
                            </td>
                            <td>190000000445</td>
                            <td>Baron Zemo</td>
                            <td>BSMT</td>

                            <td>
                              <a href="{{ route('clinlab_edit') }}">
                                <button type="button" class="btn mb-2 btn-success">
                                  View Laboratory
                                  Test Result
                              </button>
                              </a>
                            </td>
                          </tr> --}}
                        </table>
    @endsection
