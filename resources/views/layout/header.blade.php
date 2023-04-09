<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-0">
        <a class="navbar-brand" href="{{ route('index.index') }}"><img src="{{ asset('img/bikeroll.png') }}" height="90px"></a>
        <ul class="navbar-nav d-flex h-100">
          <li class="nav-item d-flex justify-content-center align-items-center fs-5 ms-2 me-3">
            <a class="nav-link" aria-current="page" href="{{ route('courses.available') }}">Carreras</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-5 me-3" data-bs-toggle="dropdown" href="{{ route('rankingMain') }}" role="button" aria-expanded="false">Clasificaciones</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="{{ route('rankingMain') }}">General</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('ranking20') }}">ranking 20</a></li>
              <li><a class="dropdown-item" href="{{ route('ranking30') }}">ranking 30</a></li>
              <li><a class="dropdown-item" href="{{ route('ranking40') }}">ranking 40</a></li>
              <li><a class="dropdown-item" href="{{ route('ranking50') }}">ranking 50</a></li>
              <li><a class="dropdown-item" href="{{ route('ranking60') }}">ranking 60</a></li>
            </ul>
          </li>
          <li class="nav-item fs-5 me-3">
            <a class="nav-link" href="{{ route('courses.finished') }}">Galería de imágenes</a>
          </li>
          @if(Session::has('username')) 
          <li class="nav-item fs-5 me-3">
            <a class="nav-link" href="{{ route('admin.logout') }}">Log Out</a>
          </li>
          @endif
    </nav>
</header>
