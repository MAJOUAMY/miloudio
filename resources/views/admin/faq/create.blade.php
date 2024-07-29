@extends('admin.layouts.app')


@section('main')
    <form action="/faq/store" method="post">
        @csrf
        <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
                <label class="form-label">Question</label>
                <input type="text" class="form-control"name="question">
            </div>

            <div class="mb-4">
                <label class="form-label">Response</label>
                <textarea class="form-control" name="response"></textarea>

            </div>

        </div>

        <button class="btn btn-success">Submit</button>
    </form>
@endsection
