@extends('admin.layouts.app')


@section('main')
    <form action="/project/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
                <label class="form-label">Title</label>
                <input type="text" class="form-control"name="title" placeholder="title">
            </div>
            <div class="mb-4">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description" placeholder="description">
            </div>
            <div class="mb-4">
                <label class="form-label">Image</label>
                <input type="file" class="form-control"name="image" placeholder="image">
            </div>
            <div class="mb-4">
                <label class="form-label">Url</label>
                <input type="url" class="form-control"name="url" placeholder="url">
            </div>
        </div>

        <button class="btn btn-success">add project</button>
    </form>
@endsection
