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
        <h1 class="text-center mb-4">Laporan Produk Laris</h1>

        <!--Table-->
        <table class="table table-striped table-hover ">

          <!--Table head-->
          <thead>
            <tr class="text-center">
              <th>ID Produk</th>
              <th class="th-lg">Kategori</th>
              <th class="th-lg">Nama Produk</th>
              <th class="th-lg">Deskripsi Produk</th>
              <th class="th-lg">Harga Produk</th>
              <th class="th-lg">Jumlah Transaksi</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
              @foreach ($listdata as $data)
              <tr class="align-middle text-center">
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
        <div class="d-flex justify-content-center">{{ $listdata->links() }}</div>
      </div>
  </body>
</html>
