<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title }} </title>
    <link rel="stylesheet" href="css/entrykategori.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>
<body>
    @include('partials.partialnavbar')
    <div class="container bg-light" style="padding:20px; border-radius:10px; border:0.1px solid rgb(201, 201, 201)">
        <h1 class="text-center">Masukkan Kategori</h1>
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
    <form action="/entrykategori" method="POST">
        @csrf
        <div class="col-12" style="padding-top: 10px">
            <label for="inputKategori" class="form-label">Nama Kategori : </label>
            <input type="text" name="NamaKategori" class="form-control" id="inputKategori" value="{{ old('NamaKategori') }}"/>
            <span style="color: red">@error('NamaKategori'){{ $message }}@enderror</span>
        </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputDeskripsi" class="form-label">Deskripsi Kategori : </label>
        <input type="text" name="DeskripsiKategori" class="form-control" id="inputDeskripsi" placeholder="Ukuran barang 120x5x10" value="{{ old('DeskripsiKategori') }}"/>
        <span style="color: red">@error('DeskripsiKategori'){{ $message }}@enderror</span>
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit">Simpan!</button>
      </div>
    </form>
    </div>
</body>
</html>
