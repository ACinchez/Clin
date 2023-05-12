@extends('layouts.default_2')

@section('content')
  <div class="wrapper">
    <main role="main" class="main-content">
      <div class="col-md-12 my-4">
          <h2 class="h4 mb-1">Search Student Records </h2>
          <p class="mb-3">University of the Immaculate Conception</p>
          <div class="card shadow">
            <div class="card-body">

              <!-- table -->
              <table class="table datatables" id="clinlab_patients">
                <thead>
                  <tr>
                    <th class="align-center"><strong>ID</strong></th>
                    <th class="align-center"><strong>Name</strong></th>
                    <th class="align-center"><strong>Course/Grade</strong></th>
                    <th class="align-center"><strong>Department</strong></th>
                    <th class="align-center" width="20%"><strong>action</strong></th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </main>
  </div>
  @section('body-scripts')
    <script>
      $(function () {
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
      });

      $('#clinlab_patients').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('search_clinlab_patient') }}",
          columns: [
              {data: 'patient_id', name: 'patient_id'},
              {data: 'name', name: 'name'},
              {data: 'course_year', name: 'course_year'},
              {data: 'age', name: 'age'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

      // $('.view-client-lab-history').click(function(){
      //   var patient_id = $(this).attr("id");
      //   console.log(patient_id);
      // });
    </script>
  @endsection
 
@endsection

