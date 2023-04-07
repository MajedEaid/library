@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Create Country')

@section('main-title', 'Create Country')

@section('sub-title', 'create country')


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
                    <h3 class="card-title">Create Country</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                    <div class="card-body">
                        <div class="form-group">
                        <label for="name">Country Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Country Name">
                        </div>
                        <div class="form-group">
                        <label for="code">Country Code</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Enter Country Code">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a  type="button" onclick="performStore()" class="btn btn-primary">Store</a>
                        <a href="{{ route('countries.index') }}" type="submit" class="btn btn-info">All Country</a>
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
        formData.append('code',document.getElementById('code').value);
        store('/cms/library/countries',formData);
    }
</script>

@endsection
