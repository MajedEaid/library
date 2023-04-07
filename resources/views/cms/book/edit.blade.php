
    @extends('cms.parent')

    @section('title' , 'Edit Book')

    @section('main-title' , 'Edit Book')

    @section('sub-title' , 'Edit Book')

    @section('styles')

    @endsection

    @section('content')

    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Edit Book</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="title"> Title </label>
                            <input type="text" class="form-control" name="title" id="title"
                            value="{{$books->title}}"  placeholder=" Title">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="image"> Image </label>
                            <input type="file" class="form-control" id="image" name="image"
                                placeholder="Image">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="price"> Price </label>
                            <input type="number" class="form-control" name="price" id="price"
                            value="{{$books->price}}"      placeholder=" price">
                        </div>

                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for="short_description">Short Description of Book</label>
                                <textarea class="form-control" style="resize:none" name="short_description" id="short_description"
                                placeholder="Enter Description of Book" cols="50">{{ $books->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for="full_description">Full Description of Book</label>
                                <textarea class="form-control" style="resize:none" name="full_description" id="full_description"
                                placeholder="Enter Description of Book" cols="50">{{ $books->full_description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Category</label>
                            <select class="form-control select2" id="category_id" name="category_id" style="width: 100%;">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Author</label>
                            <select class="form-control select2" id="author_id" name="author_id" style="width: 100%;">
                            @foreach($authors as $author)
                                <option value="{{ $author->user->id }}">{{ $author->user->firstname }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button  type="button" onclick="performUpdate({{ $books->id }})" type="button" class="btn btn-primary">Update</button>
                    <a href="{{route('books.index')}}" type="button" class="btn btn-info">GO BACK</a>

                </div>
                </form>
            </div>

            </div>
            <!--/.col (left) -->
            <!-- right column -->

            <!--/.col (right) -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    @endsection
    @section('scripts')
    <script>
        function performUpdate(){

        let formData = new FormData();
        formData.append('title',document.getElementById('title').value);
        formData.append('image',document.getElementById('image').files[0]);
        formData.append('price',document.getElementById('price').value);
        formData.append('short_description',document.getElementById('short_description').value);
        formData.append('full_description',document.getElementById('full_description').value);
        formData.append('category_id',document.getElementById('category_id').value);
        formData.append('author_id',document.getElementById('author_id').value);

        storeRoute('/cms/library/books_update/'+id , formData);
        }
    </script>
    @endsection
