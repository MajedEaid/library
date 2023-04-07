@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Index City')

@section('main-title', 'Index City')

@section('sub-title', 'index City')


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{-- <h3 class="card-title">List Data of Country</h3> --}}
                    {{-- <a href="{{ route('countries.create') }}" type="submit" class="btn btn-info">Add New Country</a> --}}

                    <form action="" method="get" style="margin-bottom:2%;">
                        <div class="row">
                            <div class="input-icon col-md-2">
                                <input type="text" class="form-control" placeholder="Search By Name of City"
                                    name='name' @if( request()->name) value={{request()->name}} @endif/>
                                <span>
                                    <i class="flaticon2-search-1 text-muted"></i>
                                </span>
                            </div>

                                <div class="input-icon col-md-2">
                                    <input type="text" class="form-control" placeholder="Search By street"
                                        name='street' @if( request()->street) value={{request()->street}} @endif/>
                                    <span>
                                        <i class="flaticon2-search-1 text-muted"></i>
                                    </span>
                                </div>

                                <div class="input-icon col-md-2">
                                <input type="date" class="form-control" placeholder="Search By Date"
                                    name='created_at' @if( request()->created_at) value={{request()->created_at}} @endif/>
                                <span>
                                    <i class="flaticon2-search-1 text-muted"></i>
                                </span>
                                </div>

                        <div class="col-md-6">
                            <button class="btn btn-success btn-md" type="submit">Filter</button>
                            <a href="{{route('cities.index')}}"  class="btn btn-danger">End Filter</a>
                            {{-- @can('Create-City') --}}

                            <a href="{{route('cities.create')}}"><button type="button" class="btn btn-md btn-primary">Add New Country</button></a>
                            {{-- @endcan --}}
                        </div>
                            </div>
                    </form>
                    </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>City Name</th>
                        <th>Street</th>
                        <th>Country Name</th>
                        <th>setting</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($cities as $city)
                        <tr>
                            <td>{{$city->id}}</td>
                            <td>{{$city->name}}</td>
                            <td>{{$city->street}}</td>
                            <td>{{$city->country->name}}</td>
                            <td>
                                <div class="btn-group">
                                    <button  type="button" onclick="performDestroy({{$city->id}} , this )" class="btn btn-danger">Delete <i class="fas fa-trash-alt"></i></button>
                                    <a href="{{ route('cities.edit' , $city->id ) }}" type="button" class="btn btn-info">Edit <i class="fas fa-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                {{ $cities->links() }}
            </div>
            <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection


@section('scripts')
<script>
    function performDestroy(id , reference) {
        confirmDestroy('/cms/library/cities/'+id , reference)
    }
</script>
@endsection
