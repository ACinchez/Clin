@extends('layouts.default')

    @section('content')
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <div class="row align-items-center my-4">
                <div class="col">
                  <hr class="my-4">
                  <h2 class="h3 mb-0 page-title">Patient Type Management</h2>
                </div>
                <div class="col-auto">
                  
                </div>
              </div>

              <div class="col-12 col-xl-10">
                <div class="row">
                  <table width="100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Patient Type Description</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($array_value['list'])
                        @if($array_value['list'][0]->patient_type_id > 0)
                          @foreach ($array_value['list'] as $list)
                            <tr>
                              <td class="align-center">{{ $list->row_num }}</td>
                              <td class="align-left">{{ $list->label }}</td>
                              <td class="align-center">{{ $list->statuscode_label }}</td>
                              <td class="align-center">
                                <a href="/update_patient_type_by_id/{{ $list->patient_type_id }}">Update</a> | 
                                <a href="/archived_patient_type_by_id/{{ $list->patient_type_id }}">Delete</a>
                              </td>
                            </tr>
                          @endforeach
                          <tr>
                            <td class="align-left" colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="align-left" colspan="4">
                              <a href="/patient_type_add">&raquo;&nbsp;Add New Patient Type</a>
                            </td>
                          </tr>
                        @endif
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
              



                
              <hr class="my-4">
  @endsection
              