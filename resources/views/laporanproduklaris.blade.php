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
        <h1 class="text-center mb-4">Laporan Produk Laris</h1>
        {{-- <form method="get">
            <div class="form-group row mb-4">
              <label for="exampleDataList" class="col-sm-2 col-form-label">Cari Data :</label>
              <div class="col-sm-10">
                <input class="form-control" value="{{ $inputdata }}"  type="text" name="searchside" autofocus="true" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
              </div>
            </div>
          </form> --}}
        <!--Table-->
        <table class="table table-striped table-hover" id="laporanproduklaris">

          <!--Table head-->
          <thead>
            <tr>
              <th>ID Produk</th>
              <th class="th-lg">Kategori</th>
              <th class="th-lg">Nama Produk</th>
              <th class="th-lg" style="padding-left: 10px">Deskripsi Produk</th>
              <th class="th-lg">Harga Produk</th>
              <th class="th-lg">Jumlah Transaksi</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
              @foreach ($list as $data)
              <tr>
                <th scope="row">{{ $data->ID_PRODUK }}</th>
                <td>{{ $data->NAMA_KATEGORI }}</td>
                <td >{{ $data->NAMA_PRODUK }}</td>
                <td >{{ $data->DESKRIPSI_PRODUK }}</td>
                <td >{{ $data->HARGA_PRODUK }}</td>
                <td >{{ $data->JUMLAHPRODUK_TRANSAKSI }}</td>
              </tr>
              @endforeach
          </tbody>
        </table>
        {{-- <div class="d-flex justify-content-center">{!! $listdata->appends(Request::except('page'))->render() !!}</div> --}}
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   <script>
       $(document).ready( function () {
        $('#laporanproduklaris').DataTable();
        } );
   </script>
  </body>
</html>
