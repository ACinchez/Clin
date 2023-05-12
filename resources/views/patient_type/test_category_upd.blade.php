@extends('layouts.default')

    @section('content')
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <div class="row align-items-center my-4">
                <div class="col">
                  <hr class="my-4">
                  <h2 class="h3 mb-0 page-title">Test Category Update</h2>
                </div>
                <div class="col-auto">
                 
                </div>
              </div>
							@if($array_value['result'])
                @if($array_value['result'][0]->test_category_id > 0)
									<form action="/save_test_category_update" method="POST">
										<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
										<input type="hidden" name="test_category_id" value="{{ $array_value['result'][0]->test_category_id }}">
										
											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="patient_type_name">Test Category Name</label>
													<input type="text" id="label" class="form-control" name="label" value="{{ $array_value['result'][0]->label }}">
												</div>
										</div>

										<input type="submit" class="btn btn-primary" value="SAVE PATIENT TYPE">

									</form>
								@else
								No Records Found.
								@endif
							@else
									No Records Found.
							@endif

                
              <hr class="my-4">
  @endsection
              