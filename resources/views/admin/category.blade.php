@extends('admin.layouts.app')


@section('main')
    <div class="block block-rounded">
        <form class="block-header block-header-default" action="/admin/categories" method="POST">
            @csrf
            <input type="text" name="name" placeholder="category name" required class="form-control">
            <div class="block-options">
                <div class="block-options-item">
                    <button class="btn btn-success">add category</button>
                </div>
            </div>
        </form>
        <div class="block-content">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">id</th>

                        <th class="d-none d-sm-table-cell" style="width: 15%;">name</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th class="text-center" scope="row">{{ $category->id }}</th>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_profile.html">{{ $category->name }}</a>
                            </td>

                            <td class="text-center">
                                <div class="btn-group">

                                    <a type="button" href="/category/delete/{{ $category->id }}"
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
@endsection
