@extends('layout')
@section('content')

            <div class="row tm-row">
                <article>
                    <div class="tm-post-link-inner">
                        <img src="{{ asset($sponsI->logo) }}" alt="sponsor" class="img-fluid">
                    </div>
					<h1 style="color: #0cc">{{$sponsI->name}}</h1>
                    <br>
					<h3>{{$sponsI->category}}</h3>
                    <br>
                    <form method="POST" action="{{ route('sponsor.destroy', $sponsI->id) }}">
                        @csrf  
                        @method('DELETE')
                        <div class="form-item center">
                            <button type="submit" class="btn-danger" style="border-radius: 10%">Delete</button>
                        </div>
                    </form>
				</article>
@endsection
