@extends('admin.layouts.app')


@section('main')
    <!-- Table -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">blogs</h3>
            <div class="block-options">
                <div class="block-options-item">
                    <a href="/blog/create" class="btn btn-success">add blog</a>
                </div>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">id</th>
                        <th>title</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">category</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <th class="text-center" scope="row">{{ $blog->id }}</th>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_profile.html">{{ $blog->title }}</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-info">{{ $blog->category->name }}</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="/blog/edit/" type="button"
                                        class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <a type="button" href="/blog/delete/{{ $blog->id }}"
                                        class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- END Table -->
@endsection
