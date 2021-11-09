<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-xtra-blog.css') }}" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conference</title>
	<link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
                <h1 class="text-center">Conference Hub</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">
                <ul>
                    <li class="tm-nav-item"><a href="/" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Blog Home
                    </a></li>
                    <li class="tm-nav-item"><a href="/sponsor" class="tm-nav-link">
                        <i class="fab fa-stripe-s"></i>
                        Sponsor
                    </a></li>
                    <li class="tm-nav-item"><a href="/writepost" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Write Post
                    </a></li>
                    <li class="tm-nav-item active"><a href="/profile" class="tm-nav-link">
                        <i class="fas fa-user"></i>
                        Profile
                    </a></li>
                </ul>
            </nav>
        </div>
    </header>
	<div class="container-fluid">
        <main class="tm-main">
            <div class="row tm-row">
                <article>
                    <h1><i class="fas fa-user" style="color: #0cc"></i> {{$user->name}}</h1>
                    <h1><i class="fas fa-envelope" style="color: #0cc"></i> {{$user->email}}</h1>
                </article>
            </div>
            <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2020 Xtra Blog Company Co. Ltd.
                </div>
            </footer>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>
