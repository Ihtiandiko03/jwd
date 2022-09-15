<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tempat Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: white; font-weight::bold;">Hiling.id</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/harga">Harga</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/pemesanan/create">Pemesanan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/pemesanan"">Rincian Pemesanan</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <h2 style="text-align: center;" class="mt-3">Wisata Lokal di Lampung</h2>

    <div class="d-flex justify-content-center mb-3">
      <div class="p-2">
        <div class="card" style="width: 20rem; ">
          <img src="{{ asset('storage/img/krui.jpg') }}" class="card-img-top">
          <div class="card-body">
              <h5 class="card-title">Krui</h5>
              <p class="card-text">Krui terletak di Kabupaten Pesawaran Provinsi Lampung.</p>
              <a href="/krui" class="btn btn-primary">Lebih lanjut</a>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 20rem; ">
          <img src="{{ asset('storage/img/airterjun.png') }}" class="card-img-top">
          <div class="card-body">
              <h5 class="card-title">Air Terjun Tanggamus</h5>
              <p class="card-text">Air terjun ini banyak digemari oleh wisatawan lokal karena jaraknya yang dekat.</p>
              <a href="/airterjuntanggamus" class="btn btn-primary">Lebih lanjut</a>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 20rem; ">
          <img src="{{ asset('storage/img/gisting.jpg') }}" class="card-img-top">
          <div class="card-body">
              <h5 class="card-title">Gisting</h5>
              <p class="card-text">Gisting merupakan dataran tinggi yang sejuk dan menjadi tempat favorit untuk camping.</p>
              <a href="/gisting" class="btn btn-primary">Lebih lanjut</a>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 20rem; ">
          <img src="{{ asset('storage/img/pahawang.jpg') }}" class="card-img-top">
          <div class="card-body">
              <h5 class="card-title">Pahawang</h5>
              <p class="card-text">Pulau Pahawang menjadi destinasi favorit untuk wisatawan lokal dan mancanegara karena mereka dapat melihat biota laut.</p>
              <a href="/pahawang" class="btn btn-primary">Lebih lanjut</a>
          </div>
        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>