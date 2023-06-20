<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andini Permatasari</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: violet;">
        <div class="container">
          <a class="navbar-brand" href="#">Andini Permatasari</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Shop
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <button type="button" class=" btn-btn-outline-light">
                <i class="bi bi-cart"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                Cart
                <i class="bi bi-0-circle-fill"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99Z"/>
                  </svg>
            </button>
          </div>
        </div>
      </nav> 
      <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/ppp.png" alt="" >
          </a>
        </div>
      </nav>
        <div class="container pt-3" style="background-color: lavender;">
            <div class="row justify-content-center">
                @foreach ($produks as $item)  
                    <div class="col col-md-3 mb-5 text-center">
                        <div class="card mt-5 ms-4" style="width: 16rem;">
                            <img src="/storage/{{ $item->foto }}" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                                <i class="bi bi-star-fill"></i>
                                <p class="card-text">{{ $item->harga_produk }}</p>
                                <a href="produk/detail/{{ $item->id_produk }}" class="btn btn-outline-primary">View Options</a>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>    
        </div>
      <div class="container-fluid">
        <footer class="py-3 my-3 border top">
          <p class="text-center">&copy; 2023 <a href="https://www.instagram.com/xxx" target="_blank" class="fw-bold text-decoration-none">Andini Permatasari</a></p>
        </footer>
      </div>
</body>
<script src="js/bootstrap.bundle.js"></script>
</html>