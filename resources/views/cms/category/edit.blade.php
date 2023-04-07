
    @extends('cms.parent')

    @section('title' , 'Edit Category')

    @section('main-title' , 'Edit Category')

    @section('sub-title' , 'Edit Category')

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
                <h3 class="card-title">Edit Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                <div class="card-body">
                    <div class="form-group">
                    <label for="name">Category Name </label>
                    <input type="text" class="form-control" name="name" id="name"
                    value="{{$categories->name}}"  placeholder="Enter Category Name">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button  type="button" onclick="performUpdate({{ $categories->id }})" type="button" class="btn btn-primary">Update</button>
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
    function performUpdate(id){
    let formData = new FormData();
    formData.append('name',document.getElementById('name').value);
    storeRoute('/cms/library/update-categories/'+id , formData);

    }
    </script>
    @endsection
