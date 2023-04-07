@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Show Country')

@section('main-title', 'Show Country')

@section('sub-title', 'show country')


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
                    <h3 class="card-title">Edit Data of Country</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                    <div class="card-body">
                        <div class="form-group">
                        <label for="name">Country Name</label>
                        <input type="text" class="form-control" disabled id="name" name="name"
                        value="{{ $countries->name }}" placeholder="Enter Country Name">
                        </div>
                        <div class="form-group">
                        <label for="code">Country Code</label>
                        <input type="text" class="form-control" disabled id="code" name="code"
                        value="{{ $countries->code }}" placeholder="Enter Country Code">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="{{ route('countries.index') }}" type="submit" class="btn btn-info">Go To Index</a>
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

@endsection
