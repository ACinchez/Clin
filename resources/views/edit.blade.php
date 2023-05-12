

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Student

                        <a href="{{ url('add') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-student/'.$StudInsert->id) }}" method="POST">
                    @csrf
                @method('PUT')
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">


                        <div class="form-group mb-3">
                            <label for="">First Name</label>
                            <input type="text" name="firstname" value="{{$StudInsert->firstname}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Last Name</label>
                            <input type="text" name="lastname" value="{{$StudInsert->lastname}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$StudInsert->email}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Middle Name</label>
                            <input type="text" name="middlename" value="{{$StudInsert->middlename}}" class="form-control">
                        </div>



                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" value="{{$StudInsert->address}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Birthday</label>
                            <input type="text" name="birthday" value="{{$StudInsert->birthday}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Gender</label>
                            <input type="text" name="gender" value="{{$StudInsert->gender}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Age</label>
                            <input type="text" name="age" value="{{$StudInsert->age}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Course and Year</label>
                            <input type="text" name="course_year" value="{{$StudInsert->course_year}}" class="form-control">
                        </div>


                        <div class="form-group mb-3">
                            <label for="">Religion</label>
                            <input type="text" name="religion" value="{{$StudInsert->religion}}" class="form-control">
                        </div>



                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Patient</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

