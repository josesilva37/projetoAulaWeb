@extends('layout')
@section('content')
	<div class="container-fluid">
        <main class="tm-main">
            <div class="row tm-row">
                <article>
                    <h1><i class="fas fa-user" style="color: #0cc"></i> {{$user->name}}</h1>
                    <h1><i class="fas fa-envelope" style="color: #0cc"></i> {{$user->email}}</h1>
                </article>
            </div>
@endsection
