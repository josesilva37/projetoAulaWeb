      <!DOCTYPE html>
      <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('css/templatemo-xtra-blog.css') }}" rel="stylesheet">
            <link href="{{ asset('css/form.css') }}" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Conference Hub</title>
            <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"> <!-- https://fontawesome.com/ -->
            <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
        </head>
      <body>
        <div class="container-fluid">
            <main class="tm-main">
                <!-- Search form -->
                <div class="row tm-row">
                    <div class="col-12">
                        <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                            <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                            <button class="tm-search-button" type="submit">
                                <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>

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
                        <li class="tm-nav-item {{ request()->is('/') ? 'active' : ''}}"><a href="/" class="tm-nav-link">
                            <i class="fas fa-home"></i>
                            Blog Home
                        </a></li>
                        <li class="tm-nav-item {{ request()->is('sponsor') ? 'active' : ''}}"><a href="/sponsor" class="tm-nav-link">
                            <i class="fas fa-dollar-sign"></i>
                            Sponsor
                        </a></li>
                        <li class="tm-nav-item {{ request()->is('speakers') ? 'active' : ''}}"><a href="/speakers" class="tm-nav-link">
                            <i class="fas fa-microphone"></i>
                            Speakers
                        </a></li>
                        <li class="tm-nav-item"><a href="/profile" class="tm-nav-link">
                            <i class="fas fa-user"></i>
                            Profile
                        </a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div>

          @yield('content')
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
        <script src="{{ asset('js/form.js') }}"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/templatemo-script.js"></script>
      </body>
      </html>
