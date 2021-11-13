@extends('layout')
@section('content')

            <div class="row tm-row">
                <article>
					<h1 style="color: #0cc">{{$sponsI->name}} ( {{$sponsI->id}} )</h1>
                    <br>
					<h3>{{$sponsI->category}}</h3>
				</article>

@endsection
