@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Edit Admin')

@section('main-title', 'Edit Admin')

@section('sub-title', 'edit admin')


@section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Edit data of Admin</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="firstname">Admin First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                value="{{ $admins->user->firstname }}" placeholder="Enter Admin First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Admin Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                value="{{ $admins->user->lastname }}" placeholder="Enter Admin Last Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                value="{{ $admins->email }}" placeholder="Enter Admin Email">
                            </div>
                            {{-- <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter Admin Email">
                            </div> --}}
                            <div class="form-group col-md-4">
                                <label for="mobile">Mobile</label>
                                <input type="text" class="form-control" id="mobile" name="mobile"
                                value="{{ $admins->user->mobile }}" placeholder="Enter Admin Mobile">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="date">Date of Birth</label>
                                <input type="date" class="form-control" id="date" name="date"
                                value="{{ $admins->user->date }}" placeholder="Enter Date of Birth">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>city Name</label>
                                    <select class="form-control select2" id="city_id" name="city_id" style="width: 100%;">
                                        {{-- <option selected>{{$admins->$city->name }}</option> --}}
                                        @foreach ($cities as $city )
                                        {{-- <option value="{{ $country->id }}">{{ $country->name }}</option> --}}
                                        <option @if($city->id == $admins->user->city_id) selected @endif value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="gender">Gender</label>
                                <select class="form-select form-select-sm" id="gender" name="gender" style="width: 100%;">
                                    <option selected>{{$admins->user->gender }}</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="status">Status</label>
                                <select class="form-select form-select-sm" id="status" name="status" style="width: 100%;">
                                    <option selected>{{$admins->user->status }}</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">InActive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="image">Choose Image</label>
                                <input type="file" class="form-control" id="image" name="image"
                                placeholder="Enter Choose Image">
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a  type="button" onclick="performUpdate({{ $admins->id }})" class="btn btn-primary">Store</a>
                        <a href="{{ route('admins.index') }}" type="submit" class="btn btn-info">Go Back</a>
                    </div>
                    </form>
                </div>
                <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection


@section('scripts')
<script>
    function performUpdate(id) {
        let formData = new FormData();
        formData.append('firstname',document.getElementById('firstname').value);
        formData.append('lastname',document.getElementById('lastname').value);
        formData.append('email',document.getElementById('email').value);
        // formData.append('password',document.getElementById('password').value);
        formData.append('date',document.getElementById('date').value);
        formData.append('gender',document.getElementById('gender').value);
        formData.append('status',document.getElementById('status').value);
        formData.append('mobile',document.getElementById('mobile').value);
        formData.append('city_id',document.getElementById('city_id').value);
        formData.append('image',document.getElementById('image').files[0]);
        store('/cms/library/admins/'+id,formData);
    }
</script>

@endsection
