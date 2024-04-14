<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        @font-face {
            font-family: Raleway;
            src: url(font/Raleway-VariableFont_wght.ttf);
        }

        *{
            font-family: Raleway;
        }

        body{
           
            width: 100vw;
            height: 100vh;
            background: url('images/bg1.jpg');
            background-size: cover;
            background-position:  center center;
        }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent">
        <div class="container-fluid">

          <a class="navbar-brand" href="#">
            <img src="images/citcs.png" height="80" alt="">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="{{ route('landing') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('abawt') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white disabled" href="#">Program</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white disabled">Admission</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3 text-center mt-5">
                <h1 class="text-white">Your Career <br> Starts With Us.</h1>
                <hr class="border-warning">
                <p class="lead text-white">We prepare diverse, talented and ambitious students to learn, lead and embody excellence in truth and service.</p>
            </div>
            <div class="col-sm-6 offset-sm-3 text-center mt-5">
                <div class="d-flex justify-content-center gap-1">
                    <button class="btn btn-warning">Explore Our Programs</button>
                    <button class="btn btn-warning">Take A Tour</button>
                </div>
            </div>
        </div>

    </div>

    <nav class="nav fixed-bottom justify-content-center small">
        <a class="nav-link text-white" aria-current="page" href="#">Terms and Conditions</a>
        <a class="nav-link text-white" href="#">Privacy Policy</a>
        <a class="nav-link text-white" href="#">Sitemap</a>
        <a class="nav-link text-white">Contact Us</a>
    </nav>

  </body>
</html>