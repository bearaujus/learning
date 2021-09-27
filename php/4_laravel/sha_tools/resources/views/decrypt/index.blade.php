@extends('layouts/main')

@push('scripts')
<script type="text/javascript" src="js/validation.js"></script>
@endpush

@section('container')
@if (session()->has('fail'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('fail')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<h1>{{__('decrypt/form.title')}}</h1>
<form action="/decrypt" method="POST" class="needs-validation" novalidate>
    @csrf
    <div class="mb-3">
        <label for="encrypted_text" class="form-label">{{__('decrypt/form.input')}}</label>
        <input class="form-control" type="text" id="encrypted_text" name="encrypted_text" autofocus required>
        <div class="invalid-feedback" style="text-align: left">
            {{__('decrypt/validation.input')}}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-auto">
            <label for="algo" class="form-label">{{__('decrypt/form.algo')}}</label>
            <select class="form-select form-select-m" id="algo" name="algo">
                <option value="sha1">SHA-1</option>
                <option value="sha256">SHA-256</option>
                <option value="sha384">SHA-384</option>
                <option value="sha512">SHA-512</option>
            </select>
        </div>
        <div class="col align-self-end">
            <button type="submit" class="btn btn-primary">{{__('decrypt/button.decrypt')}}</button>
        </div>
    </div>
</form>
@endsection