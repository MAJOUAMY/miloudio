@extends('admin.layouts.app')

@section('main')
    <form action="/certificate/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="mb-4">
                <label class="form-label"> Logo</label>
                <input type="file" class="form-control" name="logo" placeholder=" logo">
            </div>
            <div class="mb-4">
                <label class="form-label">Url</label>
                <input type="text" class="form-control" name="url" placeholder="url">
            </div>
            <div class="mb-4">
                <label class="form-label">Duration</label>
                <input type="text" class="form-control" name="duration" placeholder="2020 - 2023">
            </div>
            <div class="mb-4">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description" placeholder="bien">
            </div>

        </div>


        <button class="btn btn-success"> add Certificate </button>
    </form>
@endsection
