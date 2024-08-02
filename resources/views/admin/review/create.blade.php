@extends('admin.layouts.app')


@section('main')
    <form action="/review/store" method="post">
        @csrf
        <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
                <label class="form-label">Client Name</label>
                <input type="text" class="form-control"name="client_name">
            </div>
            <div class="mb-4">
                <label class="form-label">Project Url</label>
                <input type="text" class="form-control"name="url">
            </div>

            <div class="mb-4">
                <label class="form-label">Message</label>
                <textarea class="form-control" name="content"></textarea>

            </div>

        </div>

        <button class="btn btn-success">Submit</button>
    </form>
@endsection
