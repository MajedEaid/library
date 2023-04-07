@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Edit City')

@section('main-title', 'Edit City')

@section('sub-title', 'Edit city')


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
                    <h3 class="card-title">Edit City</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Country Name</label>
                                    <select class="form-control select2" id="country_id" name="country_id" style="width: 100%;">
                                        {{-- <option selected>{{$cities->$country->name }}</option> --}}
                                        @foreach ($countries as $country )
                                        {{-- <option value="{{ $country->id }}">{{ $country->name }}</option> --}}
                                        <option @if($country->id == $cities->country_id) selected @endif value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                        <label for="name">City Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                        value="{{ $cities->name }}" placeholder="Enter city Name">
                        </div>
                        <div class="form-group">
                        <label for="street">City street</label>
                        <input type="text" class="form-control" id="street" name="street"
                        value="{{ $cities->street }}" placeholder="Enter city street">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a  type="button" onclick="performUpdate({{ $cities->id }})" class="btn btn-primary">Updated</a>
                        <a href="{{ route('cities.index') }}" type="submit" class="btn btn-info">Go Back</a>
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
        formData.append('street',document.getElementById('street').value);
        formData.append('country_id',document.getElementById('country_id').value);
        storeRoute('/cms/library/cities_update/'+id,formData);
    }
</script>

@endsection
