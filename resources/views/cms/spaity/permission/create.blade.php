@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Create Permission')

@section('main-title', 'Create Permission')

@section('sub-title', 'create permission')


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
                    <h3 class="card-title">Create Permission</h3>
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
                                    <option value="admin">Admin</option>
                                    <option value="author">Author</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">Permission Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter permission Name">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a  type="button" onclick="performStore()" class="btn btn-primary">Store</a>
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
    function performStore() {
        let formData = new FormData();
        formData.append('name',document.getElementById('name').value);
        formData.append('guard_name',document.getElementById('guard_name').value);
        store('/cms/library/permissions',formData);
    }
</script>

@endsection
