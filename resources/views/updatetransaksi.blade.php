<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/entrypembeli.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">Entry Produk</div><!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="entrytransaksi.css">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            
        @include('partials.partialnavbar')
    <div class="container bg-light mt-4" style="padding:20px; border-radius:10px; border:0.1px solid rgb(201, 201, 201)">
        <h1 class="text-center">Ubah Transaksi</h1>
    <form action="/updatetransaksi/{{ $data[0]->ID_TRANSAKSI }}" method="post">
        @csrf
        <div class="col-12" style="padding-top: 10px">
            <label for="inputDate" class="form-label">Tanggal Transaksi : </label>
            <input type="date" name="Tanggal" class="form-control" id="inputDate" value="{{ $data[0]->TANGGAL_TRANSAKSI }}"/>
            <span style="color: red">@error('Tanggal'){{ $message }}@enderror</span>
        </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputTotalProduk" class="form-label">Total Produk : </label>
        <input type="number" name="TotalProduk" class="form-control" id="inputTotalProduk" placeholder="" value="{{ $data[0]->TOTALPRODUK_TRANSAKSI}}" />
        <span style="color: red">@error('TotalProduk'){{ $message }}@enderror</span>
      </div>
      <div class="seperatediv" style="margin-top: 10px; display:flex">
        <div class="col-md-6" style="width: 70%">
          <label for="inputTotalTransaksi" class="form-label">Total Transaksi:</label>
          <input type="number" name="TotalTransaksi" class="form-control" value="{{ $data[0]->TOTAL_TRANSAKSI }}"  />
          <span style="color: red">@error('TotalTransaksi'){{ $message }}@enderror</span>
        </div>
        <div class="space" style="width: 5%"></div>
        <div class="mb-3" style="width: 25%">
          <label for="inputPembayaranDiterima" class="form-label">Pembayaran Diterima :</label>
          <input type="number" name="PembayaranDiterima" class="form-control" id="inputPembayaranDiterima" value="{{ $data[0]->PEMBAYARAN_DITERIMA }}" />
          <span style="color: red">@error('PembayaranDiterima'){{ $message }}@enderror</span>
        </div>
      </div>
      <div class="mb-3" style="width: 25%">
          <label for="inputStatusPembayaran" class="form-label">Status Pembayaran :</label>
          <input type="text" name="StatusPembayaran" class="form-control" id="inputStatusPemabayaram" value="{{ $data[0]->STATUSDEAL_TRANSAKSI }}" />
          <span style="color: red">@error('StatusPembayaran'){{ $message }}@enderror</span>
        </div>
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit">Ubah!</button>
      </div>
    </form>
    </div>
        </body>
        </html>
        