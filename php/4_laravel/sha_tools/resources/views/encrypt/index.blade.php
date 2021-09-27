@extends('layouts/main')

@push('scripts')
<script type="text/javascript" src="js/validation.js"></script>
@endpush

@section('container')
<h1>{{__('encrypt/form.title')}}</h1>
<form action="/encrypt" method="POST" class="needs-validation" novalidate>
    @csrf
    <div class="mb-3">
        <label for="decrypted_text" class="form-label">{{__('encrypt/form.input')}}</label>
        <textarea class="form-control" id="decrypted_text" name="decrypted_text" rows="5" autofocus required></textarea>
        <div class="invalid-feedback" style="text-align: left">
            {{__('encrypt/validation.input')}}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-auto">
            <label for="algo" class="form-label">{{__('encrypt/form.algo')}}</label>
            <select class="form-select form-select-m" id="algo" name="algo">
                <option value="sha1">SHA-1</option>
                <option value="sha256">SHA-256</option>
                <option value="sha384">SHA-384</option>
                <option value="sha512">SHA-512</option>
            </select>
        </div>
        <div class="col align-self-end">
            <button type="submit" class="btn btn-primary">{{__('encrypt/button.encrypt')}}</button>
        </div>
    </div>
</form>
@endsection