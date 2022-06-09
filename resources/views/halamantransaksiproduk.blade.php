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
        <h1 class="text-center">Entry</h1>
    <form action="/halamantransaksiproduk" method="post">
        @csrf
        <div class="col-12" style="padding-top: 10px">
            <label for="inputKategori" class="form-label">NAMA KATEGORI : </label>
            <input type="text" name="Kategori" class="form-control" id="inputKategori" value="{{ old('NamaKategori') }}"/>
            <span style="color: red">@error('Kategori'){{ $message }}@enderror</span>
        </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputNamaProduk" class="form-label">Nama Produk : </label>
        <input type="text" name="NamaProduk" class="form-control" id="inputNamaProduk" placeholder="" value="{{ old('NamaProduk') }}" />
        <span style="color: red">@error('NamaProduk'){{ $message }}@enderror</span>
      </div>
      <div class="seperatediv" style="margin-top: 10px; display:flex">
        <div class="col-md-6" style="width: 70%">
          <label for="inputDeskripsiProduk" class="form-label">Deskripsi Produk :</label>
          <input type="text" name="DeskripsiProduk" class="form-control" value="{{ old('DeskripsiProduk') }}" />
          <span style="color: red">@error('DeskripsiProduk'){{ $message }}@enderror</span>
        </div>
        <div class="space" style="width: 5%"></div>
        <div class="mb-3" style="width: 25%">
          <label for="inputQty" class="form-label">Qty :</label>
          <input type="number" name="QtyProduk" class="form-control" id="inputQtyProduk" value="{{ old('Qty') }}" />
          <span style="color: red">@error('PembayaranDiterima'){{ $message }}@enderror</span>
        </div>
      </div>
      <div class="mb-3" style="width: 25%">
          <label for="inputHargaProduk" class="form-label">Harga Produk :</label>
          <input type="number" name="HargaProduk" class="form-control" id="inputHargaProduk" value="{{ old('HargaProduk') }}" />
          <span style="color: red">@error('HargaProduk'){{ $message }}@enderror</span>
        </div>
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit" onClick = "balik">Add Again</button>
        <script>
          function balik(){
            window.location.href = "/halamantransaksiproduk";
          }
        </script>
        <button class="btn btn-primary" type="submit" onClick = "deal">Deal Now</button>
        <script>
          function deal(){
            window.location.href = "/entrytransaksi";
          }
        </script>
      </div>
    </form>
    </div>
        </body>
        </html>
        