<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>How to Edit and Update Data in Laravel
                        <a href="{{ url('addpatient') }}" class="btn btn-primary float-end">Add Student</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Middle Name</th>
                                <th>Address</th>
                                <th>Birthday</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Course and Year</th>
                                <th>Religion</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($StudInsert as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->middlename }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->birthday }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->course_year }}</td>
                                <td>{{ $user->religion }}</td>
                                
                                    <td><a href="{{ url('edit-patient/'.$user->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
