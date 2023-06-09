@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Index Permission')

@section('main-title', 'Index Permission')

@section('sub-title', 'index permission')


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                {{-- <h3 class="card-title">List Data of permission</h3> --}}
                <a href="{{ route('permissions.create') }}" type="submit" class="btn btn-info">Add New permission</a>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                        </button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>permission Name</th>
                        <th>Guard Name</th>
                        <th>setting</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <td>{{$permission->id}}</td>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->guard_name}}</td>
                            <td>
                                <div class="btn-group">
                                    <button  type="button" onclick="performDestroy({{$permission->id}} , this )" class="btn btn-danger">Delete</button>
                                    <a href="{{ route('permissions.edit' , $permission->id ) }}" type="button" class="btn btn-info">Edit</a>
                                    {{-- <a href="{{ route('cities.show' , $permission->id ) }}" type="button" class="btn btn-success">Show</a> --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                {{ $permissions->links() }}
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
        confirmDestroy('/cms/library/permissions/'+id , reference)
    }
</script>
@endsection
