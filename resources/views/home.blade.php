<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/posts"><b>Home To Index Klik Here &#8592;</b></a>
              </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
             
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
    </nav>
 
    <div class="container">
       <h1> Welcome, {{ Auth::user()->name }}</h1>
    </div>
  </br>
</br>
   <center> <p>kalian sekarang berada di website di home kami silakan klik link di atas untuk melanjutkan ke halaman berikutnya...</br>
      <b><br>Salam Hangat Sang Pembuat Web 3 Hari 3 Malam</br></p></b>
      <p><b> kalau ada yang ditanyakan silakan Chat Di Wa ini</b> <a href="https://wa.me/085790773760">silakan klik disini</a>
        <p><marquee behavior='alternate' direction='right' bgcolor='blue' style='color:rgb(124, 235, 235);font-weight:bold;'> see You Semoga Bermanfaat</p>
</body>
</html>