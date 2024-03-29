<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="{{!!asset('blog/vendor/bootstrap/css/bootstrap.min.css')!!}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{!!('blog/vendor/fontawesome-free/css/all.min.css')!!}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{!!asset('blog/css/bootstrap.min.css')!!}">
  <link href="{{!!asset('blog/css/clean-blog.min.css')!!}}" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-primary bg-dark">
  
<a class="navbar-brand" href="dashboard">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.index')}}">Back to Home</a>
        </li>
     </ul>
     <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="">Logout</a>
        </li>
     </ul>

    </div>
  </nav>

</body>

    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
                <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Laravel Crud blog 2019</p>
            </div>
        </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{!!asset('blog/vendor/jquery/jquery.min.js')!!}"></script>
    <script src="{!!asset('blog/vendor/bootstrap/js/bootstrap.bundle.min.js')!!}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{!!asset('blog/js/clean-blog.min.js')!!}}"></script>

</body>

</html>

