@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Edit Permission')

@section('main-title', 'Edit Permission')

@section('sub-title', 'edit permission')


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
                    <h3 class="card-title">Edit Permission</h3>
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
                                    <option value="admin" @if ($permissions->guard_namer == 'admin') selected @endif>Admin</option>
                                    <option value="author" @if ($permissions->guard_namer == 'author') selected @endif>Author</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">permission Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                value="{{ $permissions->name }}" placeholder="Enter permission Name">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a  type="button" onclick="performUpdate({{ $permissions->id }})" class="btn btn-primary" >Update</a>
                        <a href="{{ route('permissions.index') }}" type="submit" class="btn btn-info">Go Back</a>
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
        storeRoute('/cms/library/permissions_update/'+id,formData);
    }
</script>

@endsection
