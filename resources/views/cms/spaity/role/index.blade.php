@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Index Role')

@section('main-title', 'Index Role')

@section('sub-title', 'index role')


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                {{-- <h3 class="card-title">List Data of role</h3> --}}
                <a href="{{ route('roles.create') }}" type="submit" class="btn btn-info">Add New Role</a>

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
                        <th>Role Name</th>
                        <th>Guard Name</th>
                        <th>Permission</th>
                        <th>setting</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->guard_name}}</td>
                            <td><a href="{{route('roles.permissions.index', $role->id)}}"
                                class="btn btn-info">({{$role->permissions_count}})
                                permissions/s</a> </td>
                            <td>
                            <td>
                                <div class="btn-group">
                                    <button  type="button" onclick="performDestroy({{$role->id}} , this )" class="btn btn-danger">Delete</button>
                                    <a href="{{ route('roles.edit' , $role->id ) }}" type="button" class="btn btn-info">Edit</a>
                                    {{-- <a href="{{ route('cities.show' , $role->id ) }}" type="button" class="btn btn-success">Show</a> --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                {{ $roles->links() }}
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
        confirmDestroy('/cms/library/roles/'+id , reference)
    }
</script>
@endsection
