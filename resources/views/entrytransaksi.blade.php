<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <title>{{ $title }}</title>
  </head>
  <body>
      @include('partials.partialnavbar')
    <div class="container mt-5">
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('successupdate'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('successupdate') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h1 class="text-center">Entry Transaksi</h1>
        {{-- <form method="get">
            <div class="form-group row mb-4 mt-4">
              <label for="exampleDataList" class="col-sm-2 col-form-label">Cari Data :</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="searchside" autofocus="true" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." value="{{ $inputdata }}">
              </div>
            </div>
          </form> --}}
        <form action="/entrytransaksi" method="post">
        @csrf
        <div class="col-12" style="padding-top: 10px">
          <label for="inputPembeli" class="form-label">Nama Pembeli : </label>
          <select name="pembeli" id="inputPembeli">
            @foreach ($list as $data)
             <option value="{{ $data->ID_PEMBELI }}">{{ $data->NAMA_PEMBELI }}</option>
            @endforeach
        </select>
        <span style="color: red">@error('pembeli'){{ $message }}@enderror</span>
        </div>
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
        <input type="text" name="NamaProduk" class="form-control" id="inputNamaProduk" placeholder="" value="{{ old('NamaProduk')}}" />
        <span style="color: red">@error('NamaProduk'){{ $message }}@enderror</span>
      </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputDeskripsiProduk" class="form-label">Deskripsi Produk : </label>
        <input type="text" name="DeskripsiProduk" class="form-control" id="inputDeskripsiProduk" placeholder="" value="{{ old('DeskripsiProduk')}}" />
        <span style="color: red">@error('DeskripsiProduk'){{ $message }}@enderror</span>
      </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputHargaProduk" class="form-label">Harga Produk : </label>
        <input type="number" name="HargaProduk" class="form-control" id="inputHargaProduk" placeholder="" value="{{ old('HargaProduk')}}" />
        <span style="color: red">@error('HargaProduk'){{ $message }}@enderror</span>
      </div>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputJumlahProduk" class="form-label">Jumlah Produk  : </label>
        <input type="number" name="JumlahProduk" class="form-control" id="inputJumlahProduk" placeholder="" value="{{ old('JumlahProduk')}}" />
        <span style="color: red">@error('JumlahProduk'){{ $message }}@enderror</span>
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit">Add Again</button>
        <button class="btn btn-primary" type="submit">Deal</button>
      </div>
    </form>
        {{-- <div class="d-flex justify-content-center">{!! $list->appends(Request::except('page'))->render() !!}</div> --}}
    </div>
    
  </body>
</html>
