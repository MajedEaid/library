    @extends('cms.parent')

    @section('title' , 'Index Book')

    @section('main-title' , 'Index Book')

    @section('sub-title' , 'index Book')

    @section('styles')

    @endsection

    @section('content')

    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <a href="{{route('books.create')}}" type="button" class="btn btn-info"> Add New Book</a>


                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        {{-- title  image price short_description full_description category_id author_id --}}
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book )
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title}}</td>
                            <td>
                                <img class="img-circle img-bordered-sm" src="{{asset('storage/images/book/'.$book->image ?? "")}}" width="60" height="60" alt="Book Image">
                            </td>
                            <td>{{ $book->price}}</td>

                            <td>
                                <div class="btn-group">
                                    <button  type="button" onclick="performDestroy({{$book->id}} , this )" class="btn btn-danger">Delete <i class="fas fa-trash-alt"></i></button>
                                    <a href="{{ route('books.edit' , $book->id ) }}" type="button" class="btn btn-info">Edit <i class="fas fa-edit"></i></a>
                                    <a href="{{ route('books.show' , $book->id ) }}" type="button" class="btn btn-success">Show</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                {{ $books->links() }}
            </div>

        </div>
        <!-- /.row -->

        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    @endsection

    @section('scripts')
    <script>
        function performDestroy(id , referance){
        confirmDestroy('/cms/library/books/'+ id , referance);

        }

    </script>
    @endsection
