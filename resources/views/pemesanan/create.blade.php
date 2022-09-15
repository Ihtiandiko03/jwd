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
    <h2 style="text-align: center;" class="mt-3">Pemesanan Tiket</h2>
    
    <form class="mx-5 my-5" id="formD" name="formD" method="POST" action="/pemesanan/">
    @csrf
    <div class="row mb-3">
        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
        </div>
    </div>
    <div class="row mb-3">
        <label for="nomor_identitas" class="col-sm-2 col-form-label">Nomor Identitas</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas">
        </div>
    </div>
    <div class="row mb-3">
        <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nomor_hp" name="nomor_hp">
        </div>
    </div>
    <div class="col-auto">
        <label  for="tempat_wisata">Tempat Wisata</label>
        <div class="col-sm-10">
            <select class="form-select" id="tempat_wisata" name="tempat_wisata" onchange="getval(this);">
                <option value="Pilih..." >Pilih...</option>
                <option value="Krui" >Krui</option>
                <option value="Pahawang" >Pahawang</option>
                <option value="Air Terjun Tanggamus" >Air Terjun Tanggamus</option>
                <option value="Gisting" >Gisting</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="tanggal_kunjungan" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal_kunjungan">
        </div>
    </div>
    <div class="row mb-3">
        <label for="pengunjung_dewasa" class="col-sm-2 col-form-label">Pengunjung Dewasa</label>
        <div class="col-sm-10">
       <input type="number" class="form-control" name="pengunjung_dewasa" id="pengunjung_dewasa" >
        </div>
    </div>
    <div class="row mb-3">
        <label for="pengunjung_anak_anak" class="col-sm-2 col-form-label">Pengunjung Anak-Anak</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" name="pengunjung_anak_anak" id="pengunjung_anak_anak">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="harga_tiket">Harga Tiket</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="harga_tiket" value="" id="harga_tiket" readonly="readonly">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="total_bayar">Total Bayar</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="total_bayar" value="" id="total_bayar" readonly="readonly">
        </div>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
    </div>

    <div class="d-grid gap-2 d-md-block" >
        <button class="btn btn-primary" type="button" onclick="klik()">Hitung Total Bayar</button>
        <button class="btn btn-primary" type="submit">Pesan Tiket</button>
        <button class="btn btn-primary" type="button" onclick="cancel()">Cancel</button>
    </div>


    
    </form>
    
    <script type="text/javascript" language="Javascript">

        function getval(sel) {
          tempat_wisata = sel.value;
            if (tempat_wisata == 'Pilih...'){
                harga = 0;
                document.formD.harga_tiket.value = harga;
            }
            else if(tempat_wisata == 'Krui'){
                harga = 10000;
                document.formD.harga_tiket.value = harga;
            }
            else if(tempat_wisata == 'Pahawang'){
                harga = 15000;
                document.formD.harga_tiket.value = harga;
            }
            else if(tempat_wisata == 'Air Terjun Tanggamus'){
                harga = 25000;
                document.formD.harga_tiket.value = harga;
            }
            else if(tempat_wisata == 'Gisting'){
                harga = 5000;
                document.formD.harga_tiket.value = harga;
            }
            else{
                harga = 0;
                document.formD.harga_tiket.value = harga;
            }
        }


    function klik(){

        hargasatuan = document.formD.pengunjung_dewasa.value;
        document.formD.total_bayar.value = hargasatuan;

        hargaTiket = document.formD.harga_tiket.value;
        document.formD.total_bayar.value = hargaTiket;

        jumlah = document.formD.pengunjung_anak_anak.value;
        document.formD.total_bayar.value = jumlah;

        
        total = (hargaTiket * hargasatuan) + (hargaTiket * 0.5 * jumlah);
        document.formD.total_bayar.value = total;
        
    }

    function cancel(){
        window.location.href = "/";
    }
    </script>

    
{{-- <form id="formD" name="formD" action="" method="post" enctype="multipart/form-data">
   Harga Satuan: <br> 
   <input type="text" name="harga" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"><br> 
   Jumlah:<br>
  <input type="text" name="jmlpsn" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"><br>
   Harga keseluruhan : <br>
   <input type="text" name="txtDisplay" value="" readonly="readonly">
</form>

<script type="text/javascript" language="Javascript">
   hargasatuan = document.formD.harga.value;
   document.formD.txtDisplay.value = hargasatuan;

   jumlah = document.formD.jmlpsn.value;
   document.formD.txtDisplay.value = jumlah;

   function OnChange(value){
     hargasatuan = document.formD.harga.value;
     jumlah = document.formD.jmlpsn.value;
     total = hargasatuan * jumlah;
     document.formD.txtDisplay.value = total;
   }
 </script> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>