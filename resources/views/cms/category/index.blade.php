@extends('cms.parent')

@section('styles')

@endsection


@section('title', 'Index Category')

@section('main-title', 'Index Category')

@section('sub-title', 'index category')


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                {{-- <h3 class="card-title">List Data of category</h3> --}}
                <a href="{{ route('categories.create') }}" type="submit" class="btn btn-info">Add New Category</a>

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
                        <th>Category Name</th>
                        <th>setting</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <div class="btn-group">
                                    <button  type="button" onclick="performDestroy({{$category->id}} , this )" class="btn btn-danger">Delete <i class="fas fa-trash-alt"></i></button>
                                    <a href="{{ route('categories.edit' , $category->id ) }}" type="button" class="btn btn-info">Edit <i class="fas fa-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                {{ $categories->links() }}
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
        confirmDestroy('/cms/library/categories/'+id , reference)
    }
</script>
@endsection
