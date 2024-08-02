@extends('admin.layouts.app')


@section('main')
    <!-- Table -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Socials</h3>
            <div class="block-options">
                <div class="block-options-item">
                    <a href="/social/create" class="btn btn-success"> add social</a>
                </div>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">id</th>
                        <th>Url</th>
                        {{-- <th class="d-none d-sm-table-cell" style="width: 15%;">url</th> --}}
                        <th class="text-center" style="width: 100px;">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($socials as $p)
                        <tr>
                            <th class="text-center" scope="row">{{ $p->id }}</th>
                            <td class="fw-semibold">
                                <a>{{ $p->url }}</a>
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
                                    <a href="/social/delete/{{ $p->id }}" type="button"
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
