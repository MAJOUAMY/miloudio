@extends('admin.layouts.app')

@section('main')
    <form action="/about" method="POST" enctype="multipart/form-data">

        @csrf

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h2 class="content-heading pt-0">Update you Info</h2>
        <div class="row push">

            <div class="col-lg-8 col-xl-5">
                <div class="mb-4">
                    <label class="form-label">Name</label>
                    <input type="text" value="{{ $user->name }}" class="form-control" name="name"
                        placeholder="you name">
                </div>
                <div class="mb-4">
                    <label class="form-label">Phone</label>
                    <input type="text" value="{{ $user->phone }}" class="form-control" name="phone"
                        placeholder="you name">
                </div>
                <div class="mb-4">
                    <label class="form-label">Email</label>
                    <input type="email" value="{{ $user->email }}" class="form-control" name="email"
                        placeholder="your work email">
                </div>
                <div class="mb-4">
                    <label class="form-label">work Email</label>
                    <input type="email" value="{{ $user->work_email }}" class="form-control" name="work_email"
                        placeholder="your work email">
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password Input">
                </div>
                <div class="mb-4">
                    <label class="form-label">Experience years</label>
                    <input type="number" value="{{ $user->experience_years }}" class="form-control" name="experience_years"
                        placeholder="">
                </div>
                <div class="mb-4">
                    <label class="form-label">Client Number</label>
                    <input type="number" value="{{ $user->client_number }}" class="form-control" name="client_number"
                        placeholder="">
                </div>


                <div class="mb-4">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="image ..">
                </div>
                {{-- <div class="mb-4">
              <label class="form-label" for="example-textarea-input">Textarea</label>
              <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
            </div> --}}

                <div>
                    <textarea class="form-control"  name="location" placeholder="">{{ $user->location }}</textarea>
                </div>
                <div class="mb-4 mt-3">

                    <input type="submit" class="form-control " value="update" id="example-password-input" name=""
                        placeholder="">
                </div>
            </div>
        </div>

    </form>
@endsection
