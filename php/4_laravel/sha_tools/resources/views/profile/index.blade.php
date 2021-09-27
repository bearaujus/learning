@extends('layouts/main')

@section('container')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">PROFILE</h1>
    <b>{{strtoupper(auth()->user()->getUserInfo())}}</b>
    <hr>
    <p>{{__('profile/form.desc')}}</p>
</div>
@endsection