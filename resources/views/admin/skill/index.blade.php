@extends('admin.layouts.app')


@section('main')
    <!-- Table -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Table</h3>
            <div class="block-options">
                <div class="block-options-item">
                    <a href="/skill/create" class="btn btn-success"> add skill</a>
                </div>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">id</th>
                        <th>Name</th>
                        {{-- <th class="d-none d-sm-table-cell" style="width: 15%;">url</th> --}}
                        <th class="text-center" style="width: 100px;">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $p)
                        <tr>
                            <th class="text-center" scope="row">{{ $p->id }}</th>
                            <td class="fw-semibold">
                                <a>{{ $p->name }}</a>
                            </td>
                            {{-- <td class="d-none d-sm-table-cell">
                                <a href="{{ $p->url }}" target="_blank" class="">{{ $p->url }}</a>
                            </td> --}}
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip"
                                        title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <a href="/skill/delete/{{ $p->id }}" type="button"
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
