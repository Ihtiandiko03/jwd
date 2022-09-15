<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pemesanan</title>
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

    <table class="table table-striped table-warning mx-3 my-3">
    <thead>
        <tr>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Nomor Identitas</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Tempat Wisata</th>
            <th scope="col">Tanggal Kunjungan</th>
            <th scope="col">Pengunjung Dewasa</th>
            <th scope="col">Pengunjung Anak-Anak</th>
            <th scope="col">Total Bayar</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($pemesanan as $listPesanan)
        <tr>
            <td>{{ $listPesanan->nama_lengkap }}</td>
            <td>{{ $listPesanan->nomor_identitas }}</td>
            <td>{{ $listPesanan->nomor_hp }}</td>
            <td>{{ $listPesanan->tempat_wisata }}</td>
            <td>{{ $listPesanan->tanggal_kunjungan }}</td>
            <td>{{ $listPesanan->pengunjung_dewasa }}</td>
            <td>{{ $listPesanan->pengunjung_anak_anak }}</td>
            <td>{{ $listPesanan->total_bayar }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>