@extends('layouts.default')

    @section('content')
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <div class="row align-items-center my-4">
                <div class="col">
                  <hr class="my-4">
                  <h2 class="h3 mb-0 page-title">Test Category</h2>
                </div>
                <div class="col-auto">
                 
                </div>
              </div>
              <form action="/create" method="POST">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
							<input type="hidden" name="test_category_id" value="">

                {{-- <h2 class="h3 mb-0 page-title my-4">Medical History</h2> --}}
               
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="label">Test Category</label>
                    <input type="text" id="label" class="form-control" name="label">
                  </div>
              </div>

              <input type="submit" class="btn btn-primary" value="SAVE TEST CATEGORY">

            </form>
            <br>
            <a href="/test_category_index">BACK</a>

                
              <hr class="my-4">
  @endsection
              