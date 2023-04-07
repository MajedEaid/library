
    @extends('cms.parent')

    @section('title' , 'Create Category')

    @section('main-title' , 'Create Category')

    @section('sub-title' , 'Create Category')

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
                <h3 class="card-title">Create Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                <div class="card-body">
                    <div class="form-group">
                    <label for="name">Category Name </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performStore()" type="button" class="btn btn-primary">Store</button>
                    <a href="{{route('categories.index')}}" type="button" class="btn btn-info">GO BACK</a>

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

    function performStore(){
        let formData = new FormData();
        formData.append('name',document.getElementById('name').value);
    store('/cms/library/categories' , formData);

    }

    </script>

    @endsection
