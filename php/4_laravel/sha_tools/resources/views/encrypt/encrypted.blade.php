@extends('layouts/main')

@push('scripts')
<script type="text/javascript" src="js/app.js"></script>
@endpush

@section('container')
<h1>{{__('encrypt/form.title2')}}</h1>
<div class="mb-3">
    <label for="decrypted_text" class="form-label">{{__('encrypt/form.input')}}</label>
    <textarea class="form-control" id="decrypted_text" rows="5" disabled
        readonly>{{$decrypted['decrypted_text']}}</textarea>
</div>
<hr>
<div class="row">
    <div class="col-auto">
        <label for="algo" class="form-label">{{__('encrypt/form.algo')}}</label>
        <input class="form-control" type="text" value="{{strtoupper($encrypted['algo'])}}" id="algo" disabled readonly>
    </div>
    <div class="col">
        <label for="result" class="form-label">{{__('encrypt/form.output')}}</label>
        <input class="form-control" type="text" value="{{$encrypted['encrypted_text']}}" id="result"
            style="font-weight: bold" disabled readonly>
    </div>
    <div class="col-auto align-self-end">
        <button class="btn btn-primary" onclick="copyResult()">{{__('encrypt/button.copy')}}</button>
    </div>
</div>
<hr>
<a href="/encrypt" class="btn btn-primary">{{__('encrypt/button.back')}}</a>
@endsection