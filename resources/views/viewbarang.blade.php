<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css" />

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
          <a class="nav-link" href="/">Kasir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-warning"aria-current="page" href="/viewbarang">Info Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tambahdata">Update Barang</a>
        </li>
      </ul>
    </div>
  </div>
</header>
<div class="container mt-5">
    <div class="text-center">
        <h2>Info Barang</h2>
    </div>
    <div class="form-outline">
        <input type="search" id="form1" class="form-control" placeholder="Cari Barang Apa?" aria-label="Search" />
    </div>
</div>

<div class="container mt-3">
    <div class="container" style="height : 900px">
        <div class="card border border-dark rounded overflow-auto" style="height:800px;">
            <div class="container mt-4">
            <div class="row row-cols-4 row-cols-md-4 g-4">
            @foreach($data as $value)
                <div class="col">
                  <div class="card" style="width:15rem;">
                    <div class="text-center">
                      <img src="{{asset('gambarbarang/' .$value->gambar)}}" class="gambar" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Barang : {{ $value->nama_barang }}</h6>
                      <p class="card-text">Harga Jual : {{ $value->harga_jual }}</p>
                      <p class="card-text">Harga Beli : {{ $value->harga_beli }}</p>
                      <p class="card-text">Stock Tersedia : {{ $value->stok }}</p>
                      <form action="{{url('Barang/'.$value->id)}}" method="POST" >
                      @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">DELETE</button>
                      </form>
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
    

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>