<!doctype html>
<html lang="en">
  <head>
    <title>my online profile | cloud/devops engineer | cicd principles</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="420" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/3d9e5fe33e.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="{{ asset('jquery/w3.css') }}">
     <link rel="stylesheet" href="{{ asset('jquery/jqueryui/jquery-ui.structure.css') }}">
     <link rel="stylesheet" href="{{ asset( 'jquery/jqueryui/jquery-ui.structure.min.css') }}">
     <link rel="stylesheet" href="{{ asset('jquery/jqueryui/jquery-ui.theme.min.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark shadow-sm bg-dark sticky-top">
        <div class="container">
        <a class="navbar-brand" href="{{ route('pages.index') }}">
            <h4>Myprofile</h4>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a href="{{ route('pages.index') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>

    <main class="container py-4">
        @yield('content')
    </main>
<div class="bg-secondary p-2">
    <div class="container">
        <div class="w3-center justify-content-center align-content-center w3-bottombar">
            <a href="" class="btn btn-primary">Contact</a>
            <a href="" class="btn btn-primary">Policy</a>
        </div>
        <div class="w3-center justify-content-center align-content-center w3-text-white text-white">
            <div>&copy;2022. All Right Reserve</div>
            <div><a href="{{ route('pages.index') }}">brotherforall.com</a></div>
        </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('jquery/jqueryui/jquery-ui.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('#accord').accordion({
                collapsible:true,
                heightStyle:"content",
                active:0,
            });

        });
    </script>
  </body>
</html>
