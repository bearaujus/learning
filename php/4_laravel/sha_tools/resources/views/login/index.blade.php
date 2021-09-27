@extends('layouts/main')

@push('scripts')
<script type="text/javascript" src="js/validation.js"></script>
@endpush

@section('container')

<div class="px-4 py-5 my-5 text-center">

    {{-- Title --}}
    <h1 class="display-5 fw-bold">{{__('login/form.title')}}</h1>
    <div class="col-lg-5 mx-auto">
        <hr>

        {{-- Message : register success --}}
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- Message : login fail --}}
        @if (session()->has('fail'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('fail')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="/login" method="POST" class="needs-validation" novalidate>
            @csrf

            {{-- Username --}}
            <div class="mb-4 mt-2">
                <input name="username" type="text" placeholder="{{__('login/form.username')}}" class="form-control"
                    required autofocus>
                <div class="invalid-feedback" style="text-align: left">
                    {{__('login/validation.username')}}
                </div>
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <input name="password" type="password" placeholder="{{__('login/form.password')}}" class="form-control"
                    required>
                <div class="invalid-feedback" style="text-align: left">
                    {{__('login/validation.password')}}
                </div>
            </div>

            {{-- Submit --}}
            <button type="submit" class="btn btn-primary" style="width: 100%">{{__('login/button.login')}}</button>
        </form>
        <div class="form-text mt-2">
            {{__('login/form.no_account')}} <a href="/register">{{__('login/button.no_account')}}</a>
        </div>
    </div>
</div>
@endsection