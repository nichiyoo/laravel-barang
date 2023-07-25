<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/all.css">
    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family" >
    <title>Toko A2</title>
  </head>
  <body>
  <header class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand fs-2" href="#" >
      <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Toko A2
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto fs-4">
        <li class="nav-item">
          <a class="nav-link active text-warning" aria-current="page" href="/">Kasir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('Barang')}}">Info Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('Barang/create')}}">Tambah Barang</a>
        </li>
      </ul>
    </div>
  </div>
</header>

<section>
  <div class="container py-5">
  <div class="row">
    <div class="coba">
    <div class="text_wrapper">
      <h2>Selamat Datang Admin Toko A2</h2>
    </div>
    </div>
    <div class="container mt-5 ">
      <div class="row justify-content-between">
        <div class="col-lg-8 ">
          <div class="card border border-dark rounded overflow-auto" style="height: 800px;">
          <div class="container mt-5 ">
            <div class="row justify-content-between">
              <div class="col-4 ">
                <div class="fs-2 fw-bold">
                  Daftar Barang
                </div>
              </div>
              <div class="col-4 ">
                <form class="d-flex">
                    <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
              </div>
              
              <div class="row row-cols-3 row-cols-md-3 g-4">
              @foreach($data as $value)
                <div class="col">
                  <div class="card" style="width:15rem;">
                    <div class="text-center">
                      <img src="{{asset('gambarbarang/' .$value->gambar)}}" class="gambar" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">{{ $value->nama_barang }}</h6>
                      <p class="card-text">{{ $value->harga_jual }}</p>
                      <button type="button" class="btn btn-outline-success">Beli</button>
                    </div>
                    </div>
                  </div>
                </div>
                @endforeach
                </div>
                
              </div>
                
                
              
              
            </div>
          </div>
        </div>  
      
        <div class="col-lg-3 ">
        <div class="card border border-dark rounded" style="height: 800px;">
        <div class="card overflow-auto" style="height: 700px">
        <div class="card-body">
        <div class="container border border-dark rounded" >
          <div class="row justify-content-between">
            <div class="col-4">
              <h8>Kecap Bangau</h8>
            </div>
            <div class="col-4 text-danger">
              8500
            </div>
          </div>
          <div class="container py-2">
          <div class="row">
            <div class="col align-self-start">
              <div class="wrapper">
                <span class="minus">-</span>
                <span class="num">01</span>
                <span class="plus">+</span>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
        </div>
        <div class="border-3 border-dark border-top" style="height: 100px">
        <div class="container py-3">
        <h3>Total : Rp.8500</h3>
        </div>
        
        </div>
        </div>
        </div>
    </div>
      
  </div>
  </div>
  </div>
  </div>
</section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="{{asset('/js/script.js')}}"></script>
    <script src="{{asset('/js/id.js')}}"></script>
  </body>
</html>