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
                    <br>
                    <button class="btn-primary" onclick="openForm()" style="border-radius: 10%">Update</button>
                    <div class="form-popup" id="myForm">
                    <form method="PUT" action="{{route('sponsor.update', $sponsI->id)}}" class="form-container">
                        @method('PUT')
                        @csrf
                        <h3>Update Sponsor Info</h3>
                        <label for="name"><b>Name</b></label>
                        <input type="text" id="name" value="{{$sponsI->name}}" name="name" required>

                        <label for="category"><b>category</b></label>
                        <input type="text" id="category" value="{{$sponsI->category}}" name="category" required>

                        <button type="submit" class="btn-success" style="border-radius: 10%">Update</button>
                        <button type="button" class="btn-danger" style="border-radius: 10%" onclick="closeForm()">Close</button>
                    </form>
                    </div>
                    </article>
@endsection
