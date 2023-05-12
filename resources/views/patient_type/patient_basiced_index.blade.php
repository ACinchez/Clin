@extends('layouts.default')

    @section('content')
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <div class="row align-items-center my-4">
                <div class="col">
                  <hr class="my-4">
                  <h2 class="h3 mb-0 page-title">Patients</h2>
                </div>
                <div class="col-auto">
                  
                </div>
              </div>

              <div class="col-12 col-xl-10">
                <div class="row">
                  <table width="100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Midde Name</th>
                        <th>Email</th>
                        <th>Address<th>
                        <th>Age<th>
                        <th>Birthday<th>
                        <th>Gender<th>
                        <th>Religon<th>
                        <th>Immunization</th>
                        <th>Immunization Date</th>
                        <th>Immunization Physician</th>
                        <th>Past Disease</th>
                        <th>Past Disease Datetime Diagnose</th>
                        <th>Physician</th>
                        {{-- <th>Action</th> --}}

                      </tr>
                    </thead>
                    <tbody>
                      @if($array_value['list'])
                        {{-- @if($array_value['list'][0]->patient_type_id > 0) --}}
                          @foreach ($array_value['list'] as $list)
                            <tr>
                              <td class="align-center">{{ $list->patient_id }}</td>
                              <td class="align-center">{{ $list->firstname }}</td>
                              <td class="align-center">{{ $list->lastname }}</td>
                              <td class="align-center">{{ $list->middlename }}</td>
                              <td class="align-center">{{ $list->email; }}</td>
                              <td class="align-center">{{ $list->address; }}</td>
                              <td class="align-center">{{ $list->age; }}</td>
                              <td class="align-center">{{ $list->birthday; }}</td>
                              <td class="align-center">{{ $list->gender; }}</td>
                              <td class="align-center">{{ $list->religion; }}</td>
                              <td class="align-center">{{ $list->immunization_id; }}</td>
                              <td class="align-center">{{ $list->immunization_datetime; }}</td>
                              <td class="align-center">{{ $list->immunization_physician; }}</td>
                              <td class="align-center">{{ $list->past_disease; }}</td>
                              <td class="align-center">{{ $list->past_disease_datetime_diagnose; }}</td>
                              <td class="align-center">{{ $list->physician; }}</td>
                              <td class="align-center"><a href="/update_patient_basiced_by/{{ $list->patient_id; }}">Update</a></td>
                              {{-- <td class="align-left">{{ $list->label; }}</td>
                              <td class="align-center">{{ $list->statuscode_label; }S}</td>
                              <td class="align-center">
                                <a href="/update_patient_type_by_id/{{ $list->patient_type_id; }}">Update</a> | 
                                <a href="/archived_patient_type_by_id/{{ $list->patient_type_id; }}">Delete</a> --}}
                              </td>
                            </tr>
                          @endforeach
                          <tr>
                            <td class="align-left" colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="align-left" colspan="4">
                              <a href="/basicedu">&raquo;&nbsp;Add New Patient In Basic Education</a>
                            </td>
                          </tr>
                        {{-- @endif --}}
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
              



                
              <hr class="my-4">
  @endsection
              