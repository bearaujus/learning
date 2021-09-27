@extends('layouts/main')

@push('scripts')
<script type="text/javascript" src="js/register.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
@endpush

@section('container')

<div class="px-4 py-5 my-5">

    {{-- Title --}}
    <h1 class="display-5 fw-bold text-center">{{__('register/form.title')}}</h1>
    <div class="col-lg-5 mx-auto">
        <hr>

        {{-- Message : username already exist --}}
        @if (session()->has('fail'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('fail')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="/register" method="POST" class="needs-validation" novalidate
            oninput="confirm_password.setCustomValidity(password.value != confirm_password.value ? 'err' : '')">
            @csrf

            {{-- Name --}}
            <div class="mb-4 mt-2">
                <label>{{__('register/form.name')}}</label>
                <input name="name" type="text" placeholder="{{__('register/form.name')}}" class="form-control mt-1"
                    required autofocus>
                <div class="invalid-feedback" style="text-align: left">
                    {{__('register/validation.name')}}
                </div>
            </div>

            {{-- Language --}}
            <div class="form-group">
                <label for="lang">{{__('register/form.lang')}}</label>
                <select name="lang" class="form-select form-select-m mt-1" required>
                    <option value="">{{__('register/form.select_lang')}}</option>
                    <option value="en">English</option>
                    <option value="id">Indonesia</option>
                </select>
                <div class="invalid-feedback" style="text-align: left">
                    {{__('register/validation.lang')}}
                </div>
            </div>
            <hr>

            {{-- Username --}}
            <div class="mb-4">
                <label>{{__('register/form.username')}}</label>
                <input name="username" type="text" placeholder="{{__('register/form.username')}}"
                    class="form-control mt-1" minlength="6" maxlength="10" required>
                <div class="invalid-feedback" style="text-align: left">
                    {{__('register/validation.username')}}
                </div>
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label>{{__('register/form.password')}}</label>
                <input name="password" type="password" placeholder="{{__('register/form.password')}}"
                    class="form-control mt-1" id="password" minlength="6" maxlength="12" required>
                <div class="invalid-feedback" style="text-align: left">
                    {{__('register/validation.password')}}
                </div>
            </div>

            {{-- Confirm Password --}}
            <div class="mb-4">
                <label>{{__('register/form.confirm_password')}}</label>
                <input type="password" placeholder="{{__('register/form.confirm_password')}}" class="form-control mt-1"
                    id="confirm_password" required>
                <div class="invalid-feedback" style="text-align: left" id="validator">
                    {{__('register/validation.confirm_password')}}
                </div>
            </div>

            {{-- Submit --}}
            <button type="submit" class="btn btn-primary"
                style="width: 100%">{{__('register/button.register')}}</button>
        </form>
        <div class="form-text mt-2 text-center">
            {{__('register/form.had_account')}} <a href="/login">{{__('register/button.had_account')}}</a>
        </div>
    </div>
</div>
@endsection