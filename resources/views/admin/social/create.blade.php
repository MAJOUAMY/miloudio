@extends('admin.layouts.app')


@section('main')
    <form action="/social/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
                <label class="form-label">Url</label>
                <input type="url" class="form-control"name="url" placeholder="name">
            </div>

            <div class="mb-4">
                <label class="form-label">Logo</label>
                <input type="file" class="form-control"name="logo" placeholder="logo">
            </div>

        </div>

        <button class="btn btn-success">add Social</button>
    </form>
@endsection
