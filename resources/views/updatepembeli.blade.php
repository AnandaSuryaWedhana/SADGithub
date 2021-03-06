<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/entrypembeli.css">

</head>
<body>
    @include('partials.partialnavbar')
    <div class="container bg-light mt-4" style="padding:20px; border-radius:10px; border:0.1px solid rgb(201, 201, 201)">
        <h1 class="text-center">Ubah Pembeli</h1>
    <form action="/updatepembeli/{{ $data[0]->ID_PEMBELI }}" method="post">
        @csrf
        <div class="col-12" style="padding-top: 10px">
            <label for="inputName" class="form-label">Nama : </label>
            <input type="text" name="Nama" class="form-control" id="inputName" value="{{ $data[0]->NAMA_PEMBELI }}"/>
            <span style="color: red">@error('Nama'){{ $message }}@enderror</span>
        </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputAddress" class="form-label">Alamat : </label>
        <input type="text" name="Alamat" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{ $data[0]->ALAMAT_PEMBELI }}" />
        <span style="color: red">@error('Alamat'){{ $message }}@enderror</span>
      </div>
      <div class="seperatediv" style="margin-top: 10px; display:flex">
        <div class="col-md-6" style="width: 70%">
          <label for="inputAddress" class="form-label">Nomor Telpon :</label>
          <input type="tel" name="NomorTelepon" class="form-control" value="{{ $data[0]->TELPHONE_PEMBELI }}"  />
          <span style="color: red">@error('NomorTelepon'){{ $message }}@enderror</span>
        </div>
        <div class="space" style="width: 5%"></div>
        <div class="mb-3" style="width: 25%">
          <label for="exampleFormControlInput1" class="form-label">Jumlah Transaksi :</label>
          <input type="number" name="JumlahTransaksi" class="form-control" id="exampleFormControlInput1" value="{{ $data[0]->JUMLAHPRODUK_TRANSAKSI }}" />
          <span style="color: red">@error('JumlahTransaksi'){{ $message }}@enderror</span>
        </div>
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit">Ubah!</button>
      </div>
    </form>
    </div>
</body>
</html>
