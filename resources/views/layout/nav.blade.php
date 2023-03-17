<div class="container">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('courses.available') }}">Carreras</a>
  </li>
  <li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('rankingMain') }}" role="button" aria-expanded="false">Clasificaciones</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{ route('ranking20') }}">ranking 20</a></li>
      <li><a class="dropdown-item" href="{{ route('ranking30') }}">ranking 30</a></li>
      <li><a class="dropdown-item" href="{{ route('ranking40') }}">ranking 40</a></li>
      <li><a class="dropdown-item" href="{{ route('ranking50') }}">ranking 50</a></li>
      <li><a class="dropdown-item" href="{{ route('ranking60') }}">ranking 60</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('courses.finished') }}">Galería de imágenes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
</ul>
</div>

