<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/updatedeletetransaksi.css">

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
        <h1 class="text-center">Update & Delete Transaksi</h1>
      <div class="table-responsive mt-4">


        <!--Table-->
        <table class="table table-striped table-hover ">

          <!--Table head-->
          <thead>
            <tr class="text-center">
              <th>ID TRANSAKSI'</th>
              <th class="th-lg">ID Pembeli</th>
              <th class="th-lg">TANGGAL TRANSAKSI</th>
              <th class="th-lg">jumlah produk Transaksi</th>
              <th class="th-lg">Total Transaksi</th>
              <th class="th-lg">Pembayaran Diterima</th>
              <th class="th-lg">Status Transaksi</th>
              <th class="th-lg">Edit Transaksi</th>
              </th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
          @foreach ($list as $data)
              <tr class="align-middle text-center">
                <th scope="row">{{ $data->ID_TRANSAKSI }}</th>
                <td>{{ $data->ID_PEMBELI }}</td>
                <td>{{ $data->TANGGAL_TRANSAKSI }}</td>
                <td >{{ $data->JUMLAHPRODUK_TRANSAKSI }}</td>
                <td >{{ $data->TOTAL_TRANSAKSI }}</td>
                <td >{{ $data->PEMBAYARAN_DITERIMA }}</td>
                <td >{{ $data->STATUS_DEALTRANSAKSI }}</td>
                <td>
                  <a href="/edittransaksi/{{ $data->ID_TRANSAKSI }}"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deletetransaksi/{{ $data->ID_TRANSAKSI }}"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
              @endforeach
          </tbody>


        </table>

      </div>
    </div>
  </body>
</html>
