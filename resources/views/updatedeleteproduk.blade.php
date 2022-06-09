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
        <h1 class="text-center">Update & Delete Produk</h1>

      <div class="table-responsive mt-4">
        <!--Table-->
        <table class="table table-striped table-hover " id="tablekategori">

          <!--Table head-->
          <thead>
            <tr class="text-center">
              <th class="th-lg">Id Produk</th>
              <th class="th-lg">ID Kategori</th>
              <th class="th-lg">Nama Produk</th>
              <th class="th-lg">Deskripsi Produk</th>
              <th class="th-lg">Harga Produk</th>
              <th class="th-lg">Link Foto Produk</th>
              <th class="th-lg">Jumlah Produk Transaksi</th>
              <th class="th-lg">Edit Produk</th>
              </th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
              @foreach ($list as $data)
              <tr>
                <th scope="row">{{ $data->ID_PRODUK }}</th>
                <td>{{ $data->ID_KATEGORI }}</td>
                <td >{{ $data->NAMA_PRODUK}}</td>
                <td >{{ $data->DESKRIPSI_PRODUK}}</td>
                <td >{{ $data->HARGA_PRODUK}}</td>
                <td >{{ $data->FOTO_PRODUK}}</td>
                <td >{{ $data->JUMLAHPRODUK_TRANSAKSI}}</td>
                <td>
                  <a href="/editproduk/{{ $data->ID_PRODUK}}"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deleteproduk/{{ $data->ID_PRODUK}}"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
              @endforeach
          </tbody>


        </table>
        {{-- <div class="d-flex justify-content-center">{!! $list->appends(Request::except('page'))->render() !!}</div> --}}
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   <script>
       $(document).ready( function () {
        $('#tableproduk').DataTable();
        } );
   </script>
  </body>
</html>
