<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/entrypembeli.css">
    <link rel="stylesheet" href="css/entrytransaksi.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  @include('partials.partialnavbar')
    <div class="container">
        
    
       
    <div class="container bg-light mt-4" style="padding:20px; border-radius:10px; border:0.1px solid rgb(201, 201, 201)">
        <h1 class="text-center">Ubah Produk</h1>
    <form action="/updateproduk/{{ $data[0]->ID_PRODUK }}" method="post">
        @csrf
        <div class="col-12" style="padding-top: 10px">
        <label for="inputKategori" class="form-label">Nama Kategori : </label>
            <select name="Kategori" id="inputKategori">
              <option value="KC001">CERMIN</option>
              <option value="KP001">KITCHEN SET</option>
              <option value="KP002">LEMARI</option>
              <option value="KP003">DIPAN</option>
              <option value="KP004">NAKAS</option>
              <option value="KP005">DISPLAY TV</option> 
              <option value="KP006">MEJA RIAS</option>
              <option value="KP007">MEJA BELAJAR</option>
              <option value="KP008">RAK SEPATU</option>
            </select>
            <span style="color: red">@error('NamaKategori'){{ $message }}@enderror</span>
        </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputNamaProduk" class="form-label">Nama Produk : </label>
        <input type="text" name="NamaProduk" class="form-control" id="inputNamaProduk" placeholder="" value="{{ $data[0]->NAMA_PRODUK}}" />
        <span style="color: red">@error('NamaProduk'){{ $message }}@enderror</span>
      </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputDeskripsiProduk" class="form-label">Deskripsi Produk : </label>
        <input type="text" name="DeskripsiProduk" class="form-control" id="inputDeskripsiProduk" placeholder="" value="{{ $data[0]->DESKRIPSI_PRODUK}}" />
        <span style="color: red">@error('DeskripsiProduk'){{ $message }}@enderror</span>
      </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputHargaProduk" class="form-label">Harga Produk : </label>
        <input type="number" name="HargaProduk" class="form-control" id="inputHargaProduk" placeholder="" value="{{ $data[0]->HARGA_PRODUK}}" />
        <span style="color: red">@error('HargaProduk'){{ $message }}@enderror</span>
      </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputFotoProduk" class="form-label">Foto Produk : </label>
        <input type="file" name="FotoProduk" class="form-control" id="inputFotoProduk" placeholder="" value="{{ $data[0]->FOTO_PRODUK}}" />
        <span style="color: red">@error('FotoProduk'){{ $message }}@enderror</span>
      </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputJumlahProduk" class="form-label">Jumlah Produk Transaksi : </label>
        <input type="number" name="JumlahProduk" class="form-control" id="inputJumlahProduk" placeholder="" value="{{ $data[0]->JUMLAHPRODUK_TRANSAKSI}}" />
        <span style="color: red">@error('JumlahProduk'){{ $message }}@enderror</span>
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit">Ubah!</button>
      </div>
    </form>
    </div>
        </body>
 </html>
        
