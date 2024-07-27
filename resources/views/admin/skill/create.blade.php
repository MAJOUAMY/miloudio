@extends('admin.layouts.app')


@section('main')
    <form action="/skill/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
                <label class="form-label">Name</label>
                <input type="text" class="form-control"name="name" placeholder="name">
            </div>

            <div class="mb-4">
                <label class="form-label">illustarion</label>
                <input type="file" class="form-control"name="logo" placeholder="logo">
            </div>

        </div>

        <button class="btn btn-success">add Skill</button>
    </form>
@endsection
