@extends('admin.layouts.app')

@section('main')
    <form action="/admin/experience" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
                <label class="form-label">Company</label>
                <input type="text" class="form-control" name="company" placeholder="company">
            </div>
            <div class="mb-4">
                <label class="form-label">Company Logo</label>
                <input type="file" class="form-control" name="company_logo" placeholder="company logo">
            </div>
            <div class="mb-4">
                <label class="form-label">function</label>
                <input type="text" class="form-control" name="function" placeholder="function">
            </div>
            <div class="mb-4">
                <label class="form-label">Start date</label>
                <input type="number" class="form-control" name="start_year" placeholder="start year">
            </div>
            <div class="mb-4">
                <label class="form-label">End date</label>
                <input type="number" class="form-control" name="end_year" placeholder="end year">
            </div>
        </div>


        <button class="btn btn-success"> add experience </button>
    </form>
@endsection
