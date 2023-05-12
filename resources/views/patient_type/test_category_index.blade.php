@extends('layouts.default_2')

    @section('content')
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <div class="row align-items-center my-4">
                <div class="col">
                  <hr class="my-4">
                  <h2 class="h3 mb-0 page-title">Test Category Management</h2>
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
                        <th>Test Category</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($array_value['list'])
                        @if($array_value['list'][0]->test_category_id > 0)
                          @foreach ($array_value['list'] as $list)
                            <tr>
                              <td class="align-center">{{ $list->row_num }}</td>
                              <td class="align-left">{{ $list->label }}</td>
                              <td class="align-center">{{ $list->statuscode_label }}</td>
                              <td class="align-center">
                                 <a href="/update_test_cat_by_id/{{ $list->test_category_id }}">Update</a> 
                                <a href="/archived_test_category_by_id/{{ $list->test_category_id }}">Delete</a> 
                              </td>
                            </tr>
                          @endforeach
                          <tr>
                            <td class="align-left" colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="align-left" colspan="4">
                              <a href="/test-cat-add">&raquo;&nbsp;Add New Test Category</a>
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
              