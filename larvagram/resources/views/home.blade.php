@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/logo.svg" alt="larv_logo" width="175px">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Larvagram</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            <div><a href="#">www.larvagram.com</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/assets/bangzheng-du-icecream.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/assets/bangzheng-du-infinite.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/assets/bangzheng-du-omega.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
