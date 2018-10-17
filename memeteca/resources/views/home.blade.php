@extends('layouts.app')
@section('title')
    home
    @endsection
@section('content')
<div class="container">
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="section">
        <img src="{{asset('/img/memess.png')}}" class="parallax-img">
        <div class="content">
            <h1 class="section-title">Parallax Effect</h1>
        </div>
    </div>
    <div class="section">
        <img src="{{asset('/img/meme2010.jpg')}}" class="parallax-img">
        <h1 class="section-title">Nueva imagen</h1>
    </div>
</div>
@endsection
