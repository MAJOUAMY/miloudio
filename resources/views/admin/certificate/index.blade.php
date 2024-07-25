@extends('admin.layouts.app')




@section('main')
    <!-- Table -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Certificate</h3>
            <div class="block-options">
                <div class="block-options-item">
                    <a href="/certificate/create" class="btn btn-success">Add Certificate</a>
                </div>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">id</th>
                        <th>name</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">duration</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($certifs as $e)
                        <tr>
                            <th class="text-center" scope="row">{{ $e->id }}</th>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_profile.html">{{ $e->name }}</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-info">{{ $e->duration }}</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip"
                                        title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <a href="/certificate/delete/{{ $e->id }}" type="button"
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
