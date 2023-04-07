@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Edit Role')

@section('main-title', 'Edit Role')

@section('sub-title', 'edit role')


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
                    <h3 class="card-title">Edit Role</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="guard_name">Guard Name</label>
                                    <select class="form-control" id="guard_name" name="guard_name" style="width: 100%;"
                                    aria_label=".form-select-sm example">
                                    <option value="admin" @if ($roles->guard_namer == 'admin') selected @endif>Admin</option>
                                    <option value="author" @if ($roles->guard_namer == 'author') selected @endif>Author</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">Role Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                value="{{ $roles->name }}" placeholder="Enter role Name">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a  type="button" onclick="performUpdate({{ $roles->id }})" class="btn btn-primary" >Update</a>
                        <a href="{{ route('roles.index') }}" type="submit" class="btn btn-info">Go Back</a>
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
        formData.append('name',document.getElementById('name').value);
        formData.append('guard_name',document.getElementById('guard_name').value);
        storeRoute('/cms/library/roles_update/'+id,formData);
    }
</script>

@endsection
