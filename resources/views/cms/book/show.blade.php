
    @extends('cms.parent')

    @section('title' , 'Show Book')

    @section('main-title' , 'Show Book')

    @section('sub-title' , 'show Book')

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
                <h3 class="card-title">Show Book</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for="short_description">Short Description of Book</label>
                                <textarea class="form-control" style="resize:none" name="short_description" id="short_description"
                                placeholder="Enter Description of Book" cols="50" readonly>{{ $books->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for="full_description">Full Description of Book</label>
                                <textarea class="form-control" style="resize:none" name="full_description" id="full_description"
                                placeholder="Enter Description of Book" cols="50" readonly>{{ $books->full_description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Category</label>
                            <select class="form-control select2" id="category_id" name="category_id" style="width: 100%;" readonly>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Author</label>
                            <select class="form-control select2" id="author_id" name="author_id" style="width: 100%;" readonly>
                            @foreach($authors as $author)
                                <option value="{{ $author->user->id }}">{{ $author->user->firstname }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a href="{{route('books.index')}}" type="button" class="btn btn-info">Go To Book</a>

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
    @endsection
