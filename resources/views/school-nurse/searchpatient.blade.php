@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <main role="main" class="main-content">
      <div class="col-md-12 my-4">
        <h2 class="h4 mb-1">Search Student Records </h2>
        <p class="mb-3">University of the Immaculate Conception</p>
        <div class="card shadow">
          <div class="card-body">
            <table class="table datatables" id="patient-table">
              <thead>
                <tr>
                  <th></th>
                  <th>#</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Department</th>
                  <th>Company</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {{-- <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>368</td>
                  <td>Imani Lara</td>
                  <td>(478) 446-9234</td>
                  <td>Asset Management</td>
                  <td>Borland</td>
                  <td>9022 Suspendisse Rd.</td>
                  <td>High Wycombe</td>
                  <td>Jun 8, 2019</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <label class="custom-control-label"></label>
                    </div>
                  </td>
                  <td>323</td>
                  <td>Walter Sawyer</td>
                  <td>(671) 969-1704</td>
                  <td>Tech Support</td>
                  <td>Macromedia</td>
                  <td>Ap #708-5152 Cursus. Ave</td>
                  <td>Bath</td>
                  <td>May 8, 2020</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr> --}}
              </tbody>
            </table>
            {{-- <table class="table datatables data-table " id="patient-table">
              <thead>
                <tr>
                  <th class="w-25"><strong>Patient ID</strong></th>
                  <th class="w-25"><strong>Name</strong></th>
                  <th class="w-25"><strong>email</strong></th>
                  <th class="w-25"><strong>address</strong></th>
                  <th class="w-25"><strong>birthday</strong></th>
                  <th class="w-25"><strong>age</strong></th>
                  <th class="w-25"><strong>grade</strong></th>
                  <th class="w-25"><strong>religion</strong></th>
                  <th class="w-25"><strong>gender</strong></th>
                  <th class="w-25"><strong>action</strong></th>
                </tr>
              </thead>
              <tbody></tbody>
            </table> --}}
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

      $('#patient-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('searchpatient') }}",
          columns: [
              {data: 'patient_id', name: 'patient_id'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'address', name: 'address'},
              {data: 'birthday', name: 'birthday'},
              {data: 'age', name: 'age'},
              {data: 'grade', name: 'grade'},
              {data: 'religion', name: 'religion'},
              {data: 'gender', name: 'gender'},
              {data: 'Action', name: 'Action', orderable: false, searchable: false},
          ]
      });
    </script>
  @endsection
@endsection

