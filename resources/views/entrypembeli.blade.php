<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title }} </title>
    <link rel="stylesheet" href="css/entrypembeli.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>
<body>
    @include('partials.partialnavbar')
    <div class="container bg-light" style="padding:20px; border-radius:10px; border:0.1px solid rgb(201, 201, 201)">
        <h1 class="text-center">Masukkan Pembeli</h1>
        @if (Session::get('fail'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    <form action="/entrypembeli" method="POST">
        @csrf
        <div class="col-12" style="padding-top: 10px">
            <label for="inputName" class="form-label">Nama : </label>
            <input type="text" name="Nama" class="form-control" id="inputName" value="{{ old('Nama') }}"/>
            <span style="color: red">@error('Nama'){{ $message }}@enderror</span>
        </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputAddress" class="form-label">Alamat : </label>
        <input type="text" name="Alamat" class="form-control" id="inputAddress" placeholder="Jalan Sutomo No.2" value="{{ old('Alamat') }}"/>
        <span style="color: red">@error('Alamat'){{ $message }}@enderror</span>
      </div>
      <div class="seperatediv" style="margin-top: 20px">
        <div class="col-md-6" style="width: 70%">
          <label for="inputAddress" class="form-label">Nomor Telpon :</label>
          {{-- <input type="tel" name="nomortlp" class="form-control" pattern="[0-9]{12}"/> --}}
          <input type="tel" name="NomorTelepon" class="form-control" placeholder="081234567890" value="{{ old('NomorTelepon') }}"/>
          <span style="color: red">@error('NomorTelepon'){{ $message }}@enderror</span>
        </div>
        <div class="space" style="width: 5%"></div>
        <div class="mb-3" style="width: 25%">
          <label for="exampleFormControlInput1" class="form-label">Jumlah Transaksi :</label>
          <input type="number" name="JumlahTransaksi" class="form-control" id="exampleFormControlInput1" placeholder="Harus Lebih dari 0" value="{{ old('JumlahTransaksi') }}"/>
          <span style="color: red">@error('JumlahTransaksi'){{ $message }}@enderror</span>
        </div>
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit">Simpan!</button>
      </div>
    </form>
    </div>
</body>
</html>
