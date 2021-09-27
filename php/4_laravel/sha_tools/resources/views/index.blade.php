@extends('layouts/main')

@section('container')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">SHA TOOLS</h1>
    <div class="col-lg-10 mx-auto">
        <p class="lead mb-4">{{__('home/form.desc')}}</p>
        <hr>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            @auth
            <a href="/encrypt" class="btn btn-primary btn-lg px-4 gap-3"
                style="width: 170px">{{__('home/button.encryptor')}}</a>
            <a href="/decrypt" class="btn btn-primary btn-lg px-4 gap-3"
                style="width: 170px">{{__('home/button.decryptor')}}</a>
            @else
            <a href="/login" class="btn btn-primary btn-lg px-4 gap-3"
                style="width: 170px">{{__('home/button.login')}}</a>
            <a href="/register" class="btn btn-primary btn-lg px-4 gap-3"
                style="width: 170px">{{__('home/button.register')}}</a>
            @endauth
        </div>
    </div>
    @if (session()->has('regs_log'))
    <div class="alert alert-success mt-5" role="alert">
        <h4 class="alert-heading">{{session('regs_log')['header']}}
        </h4>
        <p>{{session('regs_log')['message']}}</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{session('regs_log')['fusername']}}</th>
                    <th scope="col">{{session('regs_log')['fpassword']}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{session('regs_log')['username']}}</td>
                    <td>{{session('regs_log')['password']}}</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <p class="mb-0">{{session('regs_log')['footer']}}</p>
    </div>
    {{session()->forget('regs_log')}}
    @endif
</div>
@endsection