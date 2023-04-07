@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Edit Author')

@section('main-title', 'Edit Author')

@section('sub-title', 'edit author')


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
                    <h3 class="card-title">Edit data of Author</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="firstname">Author First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                value="{{ $authors->user->firstname }}" placeholder="Enter author First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Author Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                value="{{ $authors->user->lastname }}" placeholder="Enter author Last Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                value="{{ $authors->email }}" placeholder="Enter author Email">
                            </div>
                            {{-- <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter author Email">
                            </div> --}}
                            <div class="form-group col-md-4">
                                <label for="mobile">Mobile</label>
                                <input type="text" class="form-control" id="mobile" name="mobile"
                                value="{{ $authors->user->mobile }}" placeholder="Enter author Mobile">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="date">Date of Birth</label>
                                <input type="date" class="form-control" id="date" name="date"
                                value="{{ $authors->user->date }}" placeholder="Enter Date of Birth">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>city Name</label>
                                    <select class="form-control select2" id="city_id" name="city_id" style="width: 100%;">
                                        {{-- <option selected>{{$authors->$city->name }}</option> --}}
                                        @foreach ($cities as $city )
                                        {{-- <option value="{{ $country->id }}">{{ $country->name }}</option> --}}
                                        <option @if($city->id == $authors->user->city_id) selected @endif value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <select class="form-control select2" id="category_id" name="category_id" style="width: 100%;">
                                        @foreach ($categories as $category )
                                        <option @if($category->id == $authors->category->category_id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="gender">Gender</label>
                                <select class="form-select form-select-sm" id="gender" name="gender" style="width: 100%;">
                                    <option selected>{{$authors->$user->gender }}</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="status">Status</label>
                                <select class="form-select form-select-sm" id="status" name="status" style="width: 100%;">
                                    <option selected>{{$authors->$user->status }}</option>
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
                        <a  type="button" onclick="performUpdate({{ $authors->id }})" class="btn btn-primary">Store</a>
                        <a href="{{ route('authors.index') }}" type="submit" class="btn btn-info">Go Back</a>
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
        formData.append('category_id',document.getElementById('category_id').value);
        formData.append('image',document.getElementById('image').files[0]);
        store('/cms/library/authors/'+id,formData);
    }
</script>

@endsection
