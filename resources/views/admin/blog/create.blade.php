@extends('admin.layouts.app')


@section('main')
    <!-- CKEditor 5 Classic (js-ckeditor5-classic in Helpers.jsCkeditor5()) -->
    <!-- For more info and examples you can check out http://ckeditor.com -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Full Editor</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-settings"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <form action="/blog/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="form-label">title</label>
                    <input type="text" value="" class="form-control" name="title" placeholder="title">
                </div>
                <div class="mb-4">
                    <label class="form-label">Image</label>
                    <input type="file" value="" class="form-control" name="image" placeholder="image">
                </div>

                <div class="col-lg-8 col-xl-5">
                    <div class="mb-4">
                        <label class="form-label" for="example-select">Category</label>
                        <select class="form-select" id="example-select" name="category_id">
                            <option selected>Open this select category</option>
                            @foreach ($categories as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach


                        </select>
                    </div>

                </div>
                <div class="mb-4">
                    <label class="form-label">Read time</label>
                    <input type="number" value="" class="form-control" name="read_time" placeholder="read time">
                </div>

                <div class="mb-4">
                    <!-- CKEditor 5 Classic Container -->
                    <textarea id="js-ckeditor5-classic" name="content">Hello classic CKEditor 5!</textarea>
                </div>
                <button class="btn btn-success">create</button>
            </form>
        </div>
    </div>
    <!-- END CKEditor 5 Classic-->
@endsection

@section('js')
    <script src="{{ asset('/dashmix/assets/js/plugins/ckeditor5-classic/build/ckeditor.js') }}"></script>
    <script>
        Dashmix.helpersOnLoad(['js-ckeditor5']);
    </script>
@endsection
