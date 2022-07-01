<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Article</title>

  {{-- Assets --}}
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route("home") }}">Article</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route("home") }}">Articles</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="row mt-3">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12 mb-2">
                <div class="mb-3">
                  <h3>Article Title</h3>
                  <span>{{ $article->articleTitle }}</span>
                </div>

                <div class="mb-3">
                  <h5>Created Date</h5>
                  <span>{{ \Carbon\Carbon::parse($article->created_at)->format("l, F d, Y h:i A") }}</span>
                </div>

                <div class="mb-3">
                  <h5>Full Article Content</h5>
                  <p>{{ $article->articleContent }}</p>
                </div>




              </div>
            </div>



          </div>
        </div>
      </div>
    </div>






  </div>





  {{-- Javascript --}}
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
