<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        <h1 class="text-center">Update & Delete Pembeli</h1>
        <form method="get">
            <div class="form-group row mb-4 mt-4">
              <label for="exampleDataList" class="col-sm-2 col-form-label">Cari Data :</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="searchside" autofocus="true" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." value="{{ $inputdata }}">
              </div>
            </div>
          </form>
      <div class="table-responsive mt-4">
        <!--Table-->
        <table class="table table-striped table-hover ">

          <!--Table head-->
          <thead>
            <tr class="text-center">
              <th>@sortablelink('ID_PEMBELI', 'ID PEMBELI')</th>
              <th class="th-lg">@sortablelink('NAMA_PEMBELI', 'NAMA PEMBELI')</th>
              <th class="th-lg">ALAMAT</th>
              <th class="th-lg">NOMOR TELEPON</th>
              <th class="th-lg">JUMLAH PEMBELIAN PRODUK</th>
              <th class="th-lg">Action</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
              @foreach ($list as $data)
              <tr class="align-middle text-center">
                <th scope="row">{{ $data->ID_PEMBELI }}</th>
                <td>{{ $data->NAMA_PEMBELI }}</td>
                <td >{{ $data->ALAMAT_PEMBELI }}</td>
                <td >{{ $data->TELPHONE_PEMBELI }}</td>
                <td >{{ $data->JUMLAHPRODUK_TRANSAKSI }}</td>
                <td>
                  <a href="/editpembeli/{{ $data->ID_PEMBELI }}"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deletepembeli/{{ $data->ID_PEMBELI }}"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
              @endforeach
          </tbody>


        </table>
        <div class="d-flex justify-content-center">{!! $list->appends(Request::except('page'))->render() !!}</div>
    </div>
  </body>
</html>
