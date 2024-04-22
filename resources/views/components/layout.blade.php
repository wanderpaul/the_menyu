<html>
  <head>
    <title>{{ $title ?? 'Example Website' }}</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/browse">Browse</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
        </li>
    </ul>
    </nav>
    {{ $slot }}
    <footer>
      <hr />
      © 2023 example.com
    </footer>
  </body>
</html>