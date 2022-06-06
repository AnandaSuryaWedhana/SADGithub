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
        <h1 class="text-center">Ubah Kategori</h1>
    <form action="/updatekategori/{{ $data[0]->ID_KATEGORI }}" method="post">
        @csrf
        <div class="col-12" style="padding-top: 10px">
            <label for="inputNama" class="form-label">Nama Kategori : </label>
            <input type="text" name="NamaKategori" class="form-control" id="inputNama" value="{{ $data[0]->NAMA_KATEGORI }}"/>
            <span style="color: red">@error('NamaKategori'){{ $message }}@enderror</span>
        </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputDeskripsiKategori" class="form-label">Deskripsi Kategori : </label>
        <input type="text" name="DeskripsiKategori" class="form-control" id="inputDeskripsiKategori" placeholder="" value="{{ $data[0]->DESKRIPSI_KATEGORI}}" />
        <span style="color: red">@error('DeskripsiKategori'){{ $message }}@enderror</span>
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit">Ubah!</button>
      </div>
    </form>
    </div>
        </body>
 </html>
        
