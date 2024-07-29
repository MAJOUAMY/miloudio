@extends('admin.layouts.app')



@section('main')
    <div class="flex justify-end">
        <a href="/faq/create" class="btn  block  btn btn-success">add Q&R</a>
    </div>
    <div class="col-lg-12 push">
        <div id="accordion" role="tablist" aria-multiselectable="true">
            @foreach ($questions as $q)
                <div class="block block-rounded mb-1">
                    <div class="block-header block-header-default" role="tab" id="accordion_h1">
                        <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion"
                            href="#accordion_q{{ $q->id }}" aria-expanded="true"
                            aria-controls="accordion_q1">{{ $q->content }}</a>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip"
                                title="Edit">
                                <i class="fa fa-pencil-alt"></i>
                            </button>
                            <a href="/faq/delete/{{ $q->id }}" type="button" class="btn btn-sm btn-alt-secondary"
                                data-bs-toggle="tooltip" title="Delete">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div id="accordion_q{{ $q->id }}" class="collapse " role="tabpanel"
                        aria-labelledby="accordion_h1" data-bs-parent="#accordion">
                        <div class="block-content">
                            <p>{{ $q->response->content }}</p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
