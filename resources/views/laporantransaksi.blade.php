<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>Hello, world!</title>
  </head>
  <body>
    @include('partials.partialnavbar')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Laporan Transaksi</h1>
        {{-- <div class="p-3 mb-2 bg-secondary text-white rounded">
          <form action="" method="post">
            <label for="exampleFormControlInput1" class="form-label">Pilih Tanggal :</label>
            <input class="form-control" type="datetime-local" name="tanggal" placeholder="Select DateTime">
          </form>
        </div> --}}

        <!--Table-->
        <table class="table table-striped table-hover ">

          <!--Table head-->
          <thead>
            <tr class="text-center">
              <th>@sortablelink('ID_TRANSAKSI','ID TRANSAKSI')</th>
              <th class="th-lg">@sortablelink('ID_PEMBELI','ID PEMBELI')</th>
              <th class="th-lg">@sortablelink('PEMBELI.NAMA_PEMBELI','NAMA PEMBELI')</th>
              <th class="th-lg">Tanggal Transaksi</th>
              <th class="th-lg">Jumlah Produk Transaksi</th>
              <th class="th-lg">Total transaksi</th>
              <th class="th-lg">Pembayaran Diterima</th>
              <th class="th-lg">Status Transaksi</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
              @foreach ($list as $d)
              <tr class="align-middle text-center">
                <th scope="row">{{ $d->ID_TRANSAKSI }}</th>
                <th scope="row">{{ $d->ID_PEMBELI }}</th>
                <td>{{ $d->NAMA_PEMBELI }}</td>
                <td >{{ $d->TANGGAL_TRANSAKSI }}</td>
                <td >{{ $d->JUMLAHPRODUK_TRANSAKSI }}</td>
                <td >{{ $d->TOTAL_TRANSAKSI }}</td>
                <td >{{ $d->PEMBAYARAN_DITERIMA }}</td>
                <td >{{ $d->STATUS_DEALTRANSAKSI }}</td>
              </tr>
              @endforeach
          </tbody>


        </table>
      </div>
    </div>
    <div class="d-flex justify-content-center">{!! $list->appends(Request::except('page'))->render() !!}</div>
  </body>
</html>
