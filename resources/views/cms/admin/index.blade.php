@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Index Admin')

@section('main-title', 'Index Admin')

@section('sub-title', 'index admin')


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form action="" method="get" style="margin-bottom:2%;">
                        <div class="row">
                            <div class="input-icon col-md-3">
                                <input type="text" class="form-control" placeholder="Search By email" name='email'
                                    @if (request()->email) value={{ request()->email }} @endif />
                                <span>
                                    <i class="flaticon2-search-1 text-muted"></i>
                                </span>
                            </div>
                            <div class="input-icon col-md-3">
                                <input type="text" class="form-control" placeholder="Search By Id" name='id'
                                    @if (request()->id) value={{ request()->id }} @endif />
                                <span>
                                    <i class="flaticon2-search-1 text-muted"></i>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-success btn-md" type="submit">Filter</button>
                                <a href="{{ route('admins.index') }}" class="btn btn-danger">End Filter</a>
                                <a href="{{ route('admins.create') }}" type="submit" class="btn btn-info">Add New
                                    Admin</a>
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
                        <th>Image</th>
                        <th>Full Name</th>
                        {{-- <th>last Name</th> --}}
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>City Name</th>
                        <th>setting</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                        <tr>
                            <td>{{$admin->id}}</td>
                            <td>
                                <img class="img-circle img-bordered-sm" src="{{ asset('storage/images/admin/' . $admin->user->image ?? "") }}" width="60" height="60" alt=" User image">
                            </td>
                            <td>{{$admin->user->firstname ." ". $admin->user->lastname }}</td>
                            {{-- <td>{{$admin->user->lastname ?? ""}}</td> --}}
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->user->gender ?? ""}}</td>
                            <td>{{$admin->user->status ?? ""}}</td>
                            <td>{{$admin->user->city->name ?? ""}}</td>
                            <td>
                                <div class="btn-group">
                                    <button  type="button" onclick="performDestroy({{$admin->id}} , this )" class="btn btn-danger">Delete <i class="fas fa-trash-alt"></i></button>
                                    <a href="{{ route('admins.edit' , $admin->id ) }}" type="button" class="btn btn-info">Edit <i class="fas fa-edit"></i></a>
                                    {{-- <a href="{{ route('cities.show' , $admin->id ) }}" type="button" class="btn btn-success">Show</a> --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                {{ $admins->links() }}
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
        confirmDestroy('/cms/library/admins/'+id , reference)
    }
</script>
@endsection
