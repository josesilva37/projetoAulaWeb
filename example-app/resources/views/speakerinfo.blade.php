@extends('layout')
@section('content')
<div class="container-fluid">
    <main class="tm-main">
        <div class="row tm-row">
            <article>
                <h1 style="color: #0cc">{{$speaks->name}} ( {{$speaks->id}} )</h1>
                <br>
                <h3>{{$speaks->biography}}}</h3>
            </article>
        </div>
@endsection
