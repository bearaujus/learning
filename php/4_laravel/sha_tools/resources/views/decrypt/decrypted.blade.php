@extends('layouts/main')

@push('scripts')
<script type="text/javascript" src="js/app.js"></script>
@endpush

@section('container')
<h1>{{__('decrypt/form.title2')}}</h1>
<div class="mb-3">
    <label for="encrypted_text" class="form-label">{{__('decrypt/form.input')}}</label>
    <input class="form-control" type="text" value="{{$encrypted['encrypted_text']}}" id="encrypted_text" disabled
        readonly>
</div>
<hr>
<div class="row">
    <div class="col-auto">
        <label for="algo" class="form-label">{{__('decrypt/form.algo')}}</label>
        <input class="form-control" type="text" value="{{strtoupper($encrypted['algo'])}}" id="algo" disabled readonly>
    </div>
    <div class="col">
        <label for="result" class="form-label">{{__('decrypt/form.output')}}</label>
        <textarea class="form-control" id="result" rows="5" style="font-weight: bold" disabled
            readonly>{{$decrypted['decrypted_text']}}</textarea>
    </div>
    <div class="col-auto align-self-end">
        <button class="btn btn-primary" onclick="copyResult()">{{__('decrypt/button.copy')}}</button>
    </div>
</div>
<hr>
<a href="/decrypt" class="btn btn-primary">{{__('decrypt/button.back')}}</a>
@endsection