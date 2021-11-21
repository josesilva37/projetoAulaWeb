@extends('layout')
@section('content')
            <div class="row tm-row">
                @foreach ( $spons as $spon )
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="/sponsor/{{$spon->id}}" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="{{$spon->logo}}" alt="Image" class="img-fluid">                            
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$spon->name}}</h2>
                    </a>                    
                    <p class="tm-pt-30">{{$spon->category}}</p>
                </article>
                @endforeach
            </div>
            <button class="btn-success" onclick="openForm()" style="border-radius: 10%">ADD SPONSOR</button>
                <div class="form-popup" id="myForm">
                    <form method="POST" action="{{route('sponsor.store', $spon->id)}}" class="form-container">
                        @method('POST')
                        @csrf
                        <h3>Add Sponsor Info</h3>
                        <label for="name"><b>Name</b></label>
                        <input type="text" id="name" name="name" required>

                        <label for="category"><b>category</b></label>
                        <input type="text" id="category" name="category" required>

                        <input type="checkbox" id="active" name="active" value="true">
                        <label for="active"> Sponsor is active?</label><br>

                        <button type="submit" class="btn-success" style="border-radius: 10%">Create</button>
                        <button type="button" class="btn-danger" style="border-radius: 10%" onclick="closeForm()">Close</button>
                    </form>
                </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

@endsection
