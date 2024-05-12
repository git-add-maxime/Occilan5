<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="container">
      {{-- <a class="navbar-brand" href="#">{{config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav nav-underline">
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName() == 'app_home') active @endif" aria-current="page" href="{{route('app_home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName() == 'app_about') active @endif" aria-current="page" href="{{route('app_about')}}">About</a>
          </li>

        </ul>

      {{-- </div> --}}
      <div class="btn-group ms-auto">
        <button type="button" class="btn btn-danger">Login</button>
        </button>
      </div>
    </div>
  </nav>

